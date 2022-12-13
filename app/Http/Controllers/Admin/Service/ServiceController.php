<?php

namespace App\Http\Controllers\Admin\Service;

use App\Actions\FilterServiceAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilterServiceRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class ServiceController extends Controller
{
    /**
     * __construct
     * authorizeResource cooperate with policy and gates.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Service::class, 'service');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(FilterServiceRequest $request, FilterServiceAction $action): View
    {

        return view(

            'admin.services.index',
            $action->handle($request)

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {

        $categories = Category::all();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreServiceRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreServiceRequest $request): RedirectResponse
    {

        $service = new Service($request->validated());
        $service->save();
        return redirect()->route('services.index')->with('success', 'nowy pracownik został dodany');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Service $service
     * @return View
     */
    public function edit(Service $service): View
    {

        return view('admin.services.edit', ['service' => $service, 'categories' => Category::all()]);
    }

    /**
     * update the row in db service.
     *
     * @param  UpdateServiceRequest  $request
     * @param  Service $service
     * @return RedirectResponse
     */
    public function update(UpdateServiceRequest $request, Service $service): RedirectResponse
    {

        $service->fill($request->validated());

        $service->save();
        return redirect()->route('services.index')->with('success', 'servis został update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Service $service
     * @return RedirectResponse
     */
    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'servis został usuniety');
    }
    /**
     *  Restore user data
     * 
     * @param Service $service
     * 
     * @return \Illuminate\Http\Response
     */
    public function restore(Service $service): RedirectResponse
    {
        $service->restore();
        return redirect()->route('services.index')->with('success', 'servis zostal odzyskany');
    }
}