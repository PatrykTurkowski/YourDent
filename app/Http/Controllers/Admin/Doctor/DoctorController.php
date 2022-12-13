<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Actions\FilterDoctorAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilterDoctorRequest;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Term;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



class DoctorController extends Controller
{
    /**
     * __construct
     * authorizeResource cooperate with policy and gates.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Doctor::class, 'doctor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(FilterDoctorRequest $request, FilterDoctorAction $action): View
    {
        return view('admin.doctors.index', $action->handle($request));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {

        $categories = Category::all();
        return view('admin.doctors.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreDoctorRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreDoctorRequest $request): RedirectResponse
    {


        $doctor = new Doctor($request->validated());
        $doctor->save();
        return redirect(route('doctors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('doctors.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Doctor $doctor
     * @return View
     */
    public function edit(Doctor $doctor): View
    {

        $categories = Category::all();
        return view('admin.doctors.edit', [
            'categories' => $categories,
            'doctor' => $doctor
        ]);
    }

    /**
     * Update a data from bd doctor
     *
     * @param  UpdateDoctorRequest  $request
     * @param  Doctor $doctor
     * @return RedirectResponse
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor): RedirectResponse
    {


        $doctor->fill($request->validated());
        $doctor->save();
        return redirect()->route('doctors.index')->with('success', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Doctor $doctor
     * @return RedirectResponse
     */
    public function destroy(Doctor $doctor): RedirectResponse
    {
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'deleted');
    }
}