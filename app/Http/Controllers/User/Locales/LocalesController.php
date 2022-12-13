<?php

namespace App\Http\Controllers\User\Locales;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalesController extends Controller
{
    public function locales(Request $request)
    {
        Session::put('locale', $request->query('locale'));
        App::setLocale('pl');


        return back();
    }
}