<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($language)
    {
        $supportedLanguages = ['en', 'fr', 'de', 'es', 'it'];
        
        if (in_array($language, $supportedLanguages)) {
            session(['language' => $language]);
            app()->setLocale($language);
        }
        
        return back();
    }
}

