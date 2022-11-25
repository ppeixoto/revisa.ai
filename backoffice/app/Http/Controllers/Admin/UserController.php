<?php

namespace App\Http\Controllers\Admin;

use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Models\User;

class UserController extends Controller
{
    public function index(Admin\User\IndexRequest $request)
    {
        $search = $request->get('search');
        $users = (new UserService)->paginate($search);
        return view('admin.users.index', compact('users', 'search'));
    }

    public function create(Admin\User\CreateRequest $request)
    {
        return view('admin.users.create');
    }

    public function edit(Admin\User\EditRequest $request, User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function show(Admin\User\IndexRequest $request, User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function store(Admin\User\StoreRequest $request)
    {
        $user = (new UserService())->create($request->validated());

        return redirect()->route('admin.users.create')->with('message', 'Registro criado com sucesso');
    }

    public function update(Admin\User\UpdateRequest $request, User $user)
    {
        $user = (new UserService())->update($user, $request->validated());

        return redirect()->route('admin.users.edit', $user)->with('message', 'Registro alterado com sucesso');
    }

    public function destroy(Admin\User\DestroyRequest $request, User $user)
    {
        (new UserService())->destroy($user);
        return redirect()->route('admin.users.index')->with('message', 'Registro deletado com sucesso');
    }

    public function profile()
    {
        return view('admin.users.profile');
    }
}
