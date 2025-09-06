<?php
namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search   = trim($request->query('search', ''));
        $parentId = $request->query('parent_id'); // opsional filter parent

        $categories = Category::query()
            ->withCount(['children', 'products'])
            ->with(['parent:id,name'])
            ->when($parentId !== null && $parentId !== '', function ($q) use ($parentId) {
                $q->where('parent_id', $parentId);
            })
            ->when($search, function ($q) use ($search) {
                $q->where(function ($w) use ($search) {
                    $w->where('name', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%");
                });
            })
            ->orderBy('name')
            ->paginate(12)
            ->withQueryString();

        // Untuk dropdown filter parent
        $allParents = Category::orderBy('name')->get(['id', 'name']);

        return view('back.admin.category.index', compact('categories', 'search', 'parentId', 'allParents'));
    }

    public function show(Category $category)
    {
        $category->load(['parent', 'children', 'products']);
        return view('back.admin.category.show', compact('category'));
    }

    public function create()
    {
        $parents = Category::orderBy('name')->get(['id', 'name']);
        return view('back.admin.category.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'parent_id'   => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'description' => ['nullable', 'string'],
            'slug'        => ['nullable', 'string', 'max:255', 'unique:categories,slug'],
            'image'       => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
        ]);

        // Generate slug jika kosong
        $baseSlug     = $data['slug'] ?? Str::slug($data['name']);
        $data['slug'] = $this->makeUniqueSlug($baseSlug);

        // Upload image (opsional)
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        // Cegah set parent ke dirinya sendiri (untuk store tak perlu, tapi aman untuk future)
        if (! empty($data['parent_id']) && isset($request->id) && (int) $data['parent_id'] === (int) $request->id) {
            return back()->withInput()->withErrors(['parent_id' => 'Parent category tidak boleh dirinya sendiri.']);
        }

        $category = Category::create($data);

        return redirect()
            ->route('back.admin.category.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(Category $category)
    {
        // daftar parent, kecualikan dirinya sendiri agar tak terjadi loop
        $parents = Category::where('id', '!=', $category->id)
            ->orderBy('name')
            ->get(['id', 'name']);

        return view('back.admin.category.edit', compact('category', 'parents'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name'         => ['required', 'string', 'max:255'],
            'parent_id'    => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'description'  => ['nullable', 'string'],
            'slug'         => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('categories', 'slug')->ignore($category->id),
            ],
            'image'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
            'remove_image' => ['nullable', 'boolean'],
            'status'       => ['required', 'boolean'],
        ]);

        // Cegah parent diri sendiri
        if (! empty($data['parent_id']) && (int) $data['parent_id'] === (int) $category->id) {
            return back()->withInput()->withErrors(['parent_id' => 'Parent category tidak boleh dirinya sendiri.']);
        }

        // (Opsional) Cegah siklus sederhana: jangan set parent ke salah satu anak langsung
        if (! empty($data['parent_id'])) {
            $isChild = Category::where('parent_id', $category->id)->where('id', $data['parent_id'])->exists();
            if ($isChild) {
                return back()->withInput()->withErrors(['parent_id' => 'Tidak boleh mengatur parent ke subkategori langsung (menghindari siklus).']);
            }
        }

        // Slug: jika kosong, regenerasi dari name; jika diisi, pakai yang diisi (tetap unik)
        if (empty($data['slug'])) {
            $baseSlug     = Str::slug($data['name']);
            $data['slug'] = $this->makeUniqueSlug($baseSlug, $category->id);
        }

        // Hapus gambar lama jika diminta
        if (! empty($data['remove_image']) && $category->image) {
            if (Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
            $category->image = null; // reset kolom
        }

        // Upload gambar baru jika ada
        if ($request->hasFile('image')) {
            // hapus lama
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        $category->fill([
            'name'        => $data['name'],
            'slug'        => $data['slug'],
            'parent_id'   => $data['parent_id'] ?? null,
            'description' => $data['description'] ?? null,
            'status'      => $data['status'],
        ]);

        if (array_key_exists('image', $data)) {
            $category->image = $data['image'];
        }

        $category->save();

        return redirect()
            ->route('back.admin.category.edit', $category->id)
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Category $category)
    {
        $category->loadCount(['children', 'products']);

        if ($category->children_count > 0) {
            return back()->with('error', 'Tidak dapat menghapus: masih memiliki subkategori.');
        }

        if ($category->products_count > 0) {
            return back()->with('error', 'Tidak dapat menghapus: masih ada produk yang terkait.');
        }

        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()
            ->route('back.admin.category.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }

    /**
     * Buat slug unik; tambahkan sufiks angka jika sudah ada.
     */
    private function makeUniqueSlug(string $baseSlug, ?int $ignoreId = null): string
    {
        $slug = $baseSlug ?: Str::random(8);

        $exists = fn($s) => Category::where('slug', $s)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists();

        if (! $exists($slug)) {
            return $slug;
        }

        $i = 2;
        while ($exists("{$baseSlug}-{$i}")) {
            $i++;
        }
        return "{$baseSlug}-{$i}";
    }
}
