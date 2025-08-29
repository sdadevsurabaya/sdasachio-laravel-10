<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->query('lang') ?? App::setLocale(session('locale', 'en'));
        $supportedLocales = ['en', 'id'];

        if ($locale && in_array($locale, $supportedLocales)) {
            session(['locale' => $locale]);
        }

        App::setLocale(session('locale', 'id')); // 'id' sebagai bahasa default
        URL::defaults(['lang' => App::getLocale()]);

        return $next($request);
    }
}
