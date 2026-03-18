<?php

if (!function_exists('trans_db')) {
    /**
     * Get a translation from the database
     */
    function trans_db($key, $language = null, $default = null)
    {
        return \App\Models\Translation::get($key, $language, $default);
    }
}

if (!function_exists('get_locale')) {
    /**
     * Get the current language locale
     */
    function get_locale()
    {
        return session('language', config('app.locale', 'fn'));
    }
}

if (!function_exists('set_locale')) {
    /**
     * Set the current language locale
     */
    function set_locale($language)
    {
        session(['language' => $language]);
        app()->setLocale($language);
    }
}
