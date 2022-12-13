<?php

namespace App\Http\Controllers\User\Visit;

use App\Http\Requests\SearchFreeVisitRequest;
use App\Mail\ReserveVisitEmail;
use App\Models\Term;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Actions\SearchFreeVisitAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VisitController extends Controller
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
    public function index(SearchFreeVisitRequest $request, SearchFreeVisitAction $action): View
    {

        $data = $action->handle($request);
        return view(

            'visit.index',
            $data
        );

        // return view('visit.index', $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Term  $term
     * @return 
     */
    public function update(Term $visit)
    {
        $user = User::find(Auth::user()->id);
        if ($visit->user_id == null) {
            $visit->user_id = Auth::user()->id;
            $visit->save();
            Mail::to(Auth::user())->send(new ReserveVisitEmail($visit, $user));
            return back()->with('success', 'udało Ci się zarezerwować ten termin');
        } else {
            return back()->with('error', 'Nie udało Ci się zarezerwować tego terminu ktoś Cię ubiegł :c');
        }
    }
}