<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'description',
        'image',
        'status',
        'order',
        'ina_title',
        'eng_title',
        'ina_desc',
        'eng_desc',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('order')->orderBy('name');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // Helper judul lokal
    public function getLocalTitleAttribute(): string
    {
        $locale = app()->getLocale();
        if ($locale === 'id') {
            return $this->ina_title ?: ($this->name ?? '');
        }
        return $this->eng_title ?: ($this->name ?? '');
    }
}
