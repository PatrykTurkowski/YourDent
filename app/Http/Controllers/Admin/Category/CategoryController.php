<?php

namespace App\Http\Controllers\Admin\Category;

use App\Actions\FilterCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilterCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class CategoryController extends Controller
{
    /**
     * __construct
     * authorizeResource cooperate with policy and gates.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Category::class, 'category');
    }
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(FilterCategoryRequest $request, FilterCategoryAction $action): View
    {
        return view('admin.categories.index', $action->handle($request));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCategoryRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $category = new Category($request->validated());
        $category->save();
        return redirect()->route('categories.index')->with('success', 'dodano nową kategorie.');
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
     * @param  Category $category
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpdateCategoryRequest  $request
     * @param  Category $category
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        $category->fill($request->validated());
        $category->save();
        return redirect()->route('categories.index')->with('success', 'aktualizacja powiodła się!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'udało się usunąć categorię!');
    }
    /**
     *  Restore Category data
     * 
     * Category $category
     * 
     * @return RedirectResponse
     */
    public function restore(Category $category): RedirectResponse
    {
        $category->restore();
        return redirect()->route('categories.index')->with('success', 'udało się przywrócić categorię!');
    }
}