<?php

namespace App\Http\Controllers\Admin;

use App\Services\SpecialtyService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Models\Artist\Specialty;

class SpecialtyController extends Controller
{
    public function index(Admin\Specialty\IndexRequest $request)
    {
        $search = $request->get('search');
        $specialties = (new SpecialtyService)->paginate($search);
        return view('admin.specialties.index', compact('specialties', 'search'));
    }

    public function create(Admin\Specialty\CreateRequest $request)
    {
        return view('admin.specialties.create');
    }

    public function edit(Admin\Specialty\EditRequest $request, Specialty $specialty)
    {
        return view('admin.specialties.edit', compact('specialty'));
    }

    public function show(Admin\Specialty\IndexRequest $request, Specialty $specialty)
    {
        return view('admin.specialties.show', compact('specialty'));
    }

    public function store(Admin\Specialty\StoreRequest $request)
    {
        $specialty = (new SpecialtyService())->create($request->validated());

        return redirect()->route('admin.specialties.create')->with('message', 'Registro criado com sucesso');
    }

    public function update(Admin\Specialty\UpdateRequest $request, Specialty $specialty)
    {
        $specialty = (new SpecialtyService())->update($specialty, $request->validated());

        return redirect()->route('admin.specialties.edit', $specialty)->with('message', 'Registro alterado com sucesso');
    }

    public function destroy(Admin\Specialty\DestroyRequest $request, Specialty $specialty)
    {
        (new SpecialtyService())->destroy($specialty);
        return redirect()->route('admin.specialties.index')->with('message', 'Registro deletado com sucesso');
    }
}
