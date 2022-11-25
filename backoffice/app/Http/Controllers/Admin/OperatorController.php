<?php

namespace App\Http\Controllers\Admin;

use App\Services\AdminService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Operator;
use App\Models\Admin;


class OperatorController extends Controller
{
    public function index(Operator\IndexRequest $request)
    {
        $search = $request->get('search');
        $operators = (new AdminService)->paginate($search);
        return view('admin.operators.index', compact('operators', 'search'));
    }

    public function create(Operator\CreateRequest $request)
    {
        return view('admin.operators.create');
    }

    public function edit(Operator\EditRequest $request, Admin $admin)
    {
        return view('admin.operators.edit', compact('admin'));
    }

    public function show(Operator\IndexRequest $request, Admin $admin)
    {
        return view('admin.operators.show', compact('admin'));
    }

    public function store(Operator\StoreRequest $request)
    {
        $admin = (new AdminService())->create($request->validated());

        return redirect()->route('admin.operators.create')->with('message', 'Registro criado com sucesso');
    }

    public function update(Operator\UpdateRequest $request, Admin $admin)
    {
        $admin = (new AdminService())->update($admin, $request->validated());

        return redirect()->route('admin.operators.edit', $admin)->with('message', 'Registro alterado com sucesso');
    }

    public function destroy(Operator\DestroyRequest $request, Admin $admin)
    {
        (new AdminService())->destroy($admin);
        return redirect()->route('admin.operators.index')->with('message', 'Registro deletado com sucesso');
    }
}
