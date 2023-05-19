<?php

namespace App\Http\Controllers\User\Faq;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function __invoke(Request $request): View
    {

        return view('user.faq.index');
    }
}
