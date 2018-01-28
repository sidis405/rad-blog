<?php

namespace App\Http\Middleware;

use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);


        if (!in_array($locale, config('app.locales'))) {
            $segments = $request->segments();

            array_unshift($segments, config('app.fallback_locale'));

            $new = implode("/", $segments);
            return redirect($new);
        }

        app()->setLocale($locale);


        // dd('d');
        return $next($request);
    }
}
