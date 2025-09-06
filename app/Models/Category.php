<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = [
        'name', 'parent_id', 'description', 'image', 'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    // Relasi ke subkategori
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Relasi ke kategori induk
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Relasi ke produk langsung (tanpa memperhitungkan subkategori)
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
