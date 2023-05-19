<?php

namespace App\Http\Controllers\User\Offer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $offers = Service::all();
        return view('user.offer.index', compact('offers'));
    }
}
