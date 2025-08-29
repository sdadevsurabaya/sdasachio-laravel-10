<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(Request $request)
    {
        // Mendapatkan bahasa dari URL parameter 'lang'
        $locale = $request->query('lang') ?? App::setLocale(session('locale', 'en'));

        // Validasi bahasa yang diminta
        if ($locale && in_array($locale, ['en', 'id'])) {
            session()->put('locale', $locale);
        }

        // Atur bahasa aplikasi dari session jika ada
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
    }
}
