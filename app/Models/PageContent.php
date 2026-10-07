<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = [
        'page_key',
        'block_type',
        'title',
        'subtitle',
        'description',
        'button_text',
        'button_url',
        'secondary_button_text',
        'secondary_button_url',
        'sort_order',
        'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
        'sort_order' => 'integer',
    ];

    public static function blocks(string $pageKey): Collection
    {
        return static::query()
            ->where('page_key', $pageKey)
            ->where('is_visible', true)
            ->orderBy('sort_order')
            ->get();
    }

    public static function block(string $pageKey): ?static
    {
        return static::blocks($pageKey)->first();
    }

    public function scopeOfPage(Builder $query, string $pageKey): Builder
    {
        return $query->where('page_key', $pageKey);
    }
}
