<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = ['key', 'language', 'section', 'value', 'type'];

    public static function get($key, $language = null, $default = null)
    {
        $lang = $language ?? session('language') ?? app()->getLocale();
        
        $translation = self::where('key', $key)
            ->where('language', $lang)
            ->first();
        
        return $translation ? $translation->value : ($default ?? $key);
    }

    public static function getBySection($section, $language = null)
    {
        $lang = $language ?? session('language') ?? app()->getLocale();
        
        return self::where('section', $section)
            ->where('language', $lang)
            ->pluck('value', 'key')
            ->toArray();
    }

    public static function getAllLanguages()
    {
        return self::distinct()->pluck('language')->toArray();
    }
}

