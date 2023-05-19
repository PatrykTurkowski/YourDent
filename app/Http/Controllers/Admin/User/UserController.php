<?php

namespace App\Http\Controllers\Admin\User;

use App\Actions\FilterUserAction;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilterUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Contracts\View\View;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
{
    /**
     * __construct
     * authorizeResource cooperate with policy and gates.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }


    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(FilterUserRequest $request, FilterUserAction $action): View
    {
        return view(
            'admin.users.index',
            $action->handle($request)
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return @return View
     */
    public function create(): View
    {

        $roles = UserRole::cases();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $user = new User($request->validated());

        $user->password = Hash::make($user->password);
        $user->save();
        return redirect()->route('users.index')->with('success', 'Udało dodać się nowego użytkownika.');
    }

    /**
     * Display the specified resource.
     *
     * @param int User $user
     * @return View
     */
    public function show(User $user): View
    {

        return (view('admin.users.show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {

        $user->fill($request->validated());

        $user->save();
        if ($user->role <= 2) {
            return redirect()->route('users.index')->with('success', 'udalo sie update danych.');
        } else {
            return redirect()->route('dashboard')->with('success', 'udalo sie update danych.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'usuniecie się powiodło!');
    }
}
