<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name', 'sku', 'description', 'image', 'category_id', 'parent_id',
    ];

    // Relasi ke kategori
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke produk induk (jika ini adalah sub-produk)
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }

    // Relasi ke sub-produk (anak dari produk ini)
    public function children(): HasMany
    {
        return $this->hasMany(Product::class, 'parent_id');
    }
}
