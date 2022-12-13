<?php

namespace App\Http\Controllers\User\Management;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class HistoryController extends Controller
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
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $terms = Term::where('user_id', '=', Auth()->user()->id)->where('is_done', '=', 1)->get();

        return view('user.history.index', compact('terms'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Term  $history
     * @return View
     */
    public function show(Term $history): View
    {


        return view('user.history.show', compact('history'));
    }
}