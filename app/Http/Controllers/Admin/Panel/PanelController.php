<?php

namespace App\Http\Controllers\Admin\Panel;

use App\Http\Controllers\Controller;
use App\Models\Term;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    /**
     * __construct
     * authorizeResource cooperate with policy and gates.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Term::class, 'term');
    }
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::all()->count();
        $terms = Term::where('user_id', "!=", null)->where('is_done', "!=", true)->count();

        return view('admin.panel.index', compact('users', 'terms'));
    }
}