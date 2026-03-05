<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($language)
    {
        $supportedLanguages = ['id', 'en', 'fr'];
        
        if (in_array($language, $supportedLanguages)) {
            session(['language' => $language]);
            \Illuminate\Support\Facades\App::setLocale($language);
            session()->save();
        }
        
        return back();
    }
}

