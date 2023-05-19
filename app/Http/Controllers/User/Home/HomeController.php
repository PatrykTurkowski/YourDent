<?php

namespace App\Http\Controllers\User\Home;

use App\Http\Controllers\Controller;
use App\Models\Term;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(auth()->id());
        $terms = Term::where('user_id', '=', auth()->id())->get();

        return view('user/dashboard', compact('user', 'terms'));
    }
}
