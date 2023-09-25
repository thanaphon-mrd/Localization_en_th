<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    //

    public function changeLocale($locale)
{
    if (in_array($locale, ['en', 'th'])) {
        session(['locale' => $locale]);
    }
    return back();
}


}
