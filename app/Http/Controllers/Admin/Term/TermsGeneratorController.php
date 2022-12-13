<?php

namespace App\Http\Controllers\Admin\Term;

use App\Actions\StoreTermAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTermsGeneratorRequest;
use App\Models\Doctor;
use App\Rules\FreeTermEndVisit;
use App\Rules\FreeTermStartVisit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Validator;

class TermsGeneratorController extends Controller implements ShouldQueue
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
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): view
    {
        $doctors = Doctor::all();

        return view('admin.terms.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTermsGeneratorRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreTermsGeneratorRequest $request, StoreTermAction $action): RedirectResponse
    {
        $terms = $action->handle($request);
        $validator = Validator::make(
            $terms,
            [
                'start_visit' => [new FreeTermStartVisit($terms)],
                'end_visit' => [new FreeTermEndVisit($terms)],
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
        $action->pushTermsToDb($terms);


        return redirect()->route('terms.index')->with('success', 'U added new terms, this term need 24 hours to be active for Users.');
    }
}