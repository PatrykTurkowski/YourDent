<?php

namespace App\Http\Controllers\User\Management;

use App\Http\Controllers\Controller;
use App\Mail\ReserveVisitEmail;
use App\Mail\UnreserveVisitEmail;
use App\Models\Term;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
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
        $terms = Term::where('user_id', '=', Auth()->user()->id)->where('is_done', '=', 0)->get();

        return view('user.reservation.index', compact('terms'));
    }




    /**
     * Display the specified resource.
     *
     * @param  Term  $term
     * @return View
     */
    public function show(Term $reservation): View
    {


        return view('user.reservation.show', compact('reservation'));
    }



    /**
     * update the specified resource.
     *
     * @param  Term $reservation
     * @param  User $user
     * @return RedirectResponse
     */
    public function update(Term $reservation): RedirectResponse
    {
        if ($reservation->is_done) {
            abort('403', 'method not allowed');
        }
        $user = User::find(auth()->user()->id);
        $reservation->update([
            'user_id' => null
        ]);
        $reservation->save();

        Mail::to(Auth::user())->send(new UnreserveVisitEmail($reservation, $user));

        return redirect(route('reservations.index'))->with('success', 'Udało Ci się odwołać rezeracje!');
    }
}
