<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceContent extends Model
{
    protected $fillable = ['section_key', 'content'];
    
    protected $casts = [
        'content' => 'array',
    ];

    public static function getBySection($sectionKey, $language = null)
    {
        $lang = $language ?? session('language') ?? config('app.locale', 'fr');
        
        $priceContent = self::where('section_key', $sectionKey)->first();
        
        if (!$priceContent) {
            return null;
        }
        
        return $priceContent->content[$lang] ?? $priceContent->content['fr'] ?? null;
    }
}
