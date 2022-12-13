<?php

namespace App\Http\Controllers\Admin\Term;

use App\Actions\FilterTermAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilterTermRequest;
use App\Http\Requests\StoreTermRequest;
use App\Http\Requests\UpdateTermRequest;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Term;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TermController extends Controller
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
    public function index(FilterTermRequest $request, FilterTermAction $action): View
    {

        $data = $action->handle($request);
        return view(

            'admin.terms.index',
            $data
        );
    }

    public function pagination(Request $request)
    {
        $this->authorize('terms.viewAny');
        if ($request->ajax()) {
            $terms =  Term::sortable()->paginate(5);
            return view(
                'admin.terms.index_ajax',
                compact('terms')
            )->render();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $this->authorize('terms.create');
        $doctors = Doctor::all();
        $services = Service::all();
        return view('admin.terms.single.create', compact('doctors', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTermRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreTermRequest $request): RedirectResponse

    {
        $this->authorize('terms.create');
        $term = new Term($request->validated());
        $term->save();
        return redirect()->route('terms.index')->with('success', 'udało Ci się stworzyć nowe terminy, które będą widoczne po upływie 24h');
    }

    /**
     * Display the specified resource.
     *
     * @param  Term  $term
     * @return View
     */
    public function show(Term $term)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Term term
     * @return View
     */
    public function edit(Term $term)
    {
        return view('admin.terms.edit', [
            'term' => $term,
            'doctors' => Doctor::all(),
            'services' => Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpdateTermRequest  $request
     * @param  Term $term
     * @return RedirectResponse
     */
    public function update(UpdateTermRequest $request, Term $term): RedirectResponse
    {

        $term->fill($request->validated());
        $term->save();
        return redirect(route('terms.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $term = Term::find($id);
        $this->authorize('terms.delete', $term);
        $term->delete();
        return redirect(route('terms.index'));
    }
}