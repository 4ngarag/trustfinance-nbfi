<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $lang The language key to use in setting the app locale, e.g 'en', 'fr'
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = config('app.locale'); // config/app.php

        if (request(key: 'language')) {
            if (request(key: 'language') == 'en' || request(key: 'language') == 'ru' || request(key: 'language') == 'mn') {
                $language = request(key: 'language');
                session()->put('language', $language);
            } else {
                $language = 'en';
                session()->put('language', $language);
            }
        } elseif (session(key: 'language')) {
            $language = session(key: 'language');
        }
        app()->setLocale($language);

        return $next($request);
    }
}