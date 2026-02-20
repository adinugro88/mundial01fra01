<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguageLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get language from URL parameter, session, or use default
        $language = $request->query('lang') ?? session('language') ?? config('app.locale', 'fr');
        
        // Validate language is supported
        $supportedLanguages = ['en', 'fr', 'de', 'es', 'it'];
        if (!in_array($language, $supportedLanguages)) {
            $language = 'fr';
        }
        
        // Set session and app locale
        session(['language' => $language]);
        app()->setLocale($language);
        
        return $next($request);
    }
}
