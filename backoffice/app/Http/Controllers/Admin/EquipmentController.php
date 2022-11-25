<?php

namespace App\Http\Controllers\Admin;

use App\Services\EquipmentCategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Models\Artist\EquipmentCategory;
use App\Models\Global\Unit;

class EquipmentController extends Controller
{
    public function index(Admin\Equipment\IndexRequest $request)
    {
        $search = $request->get('search');
        $equipments = (new EquipmentCategoryService)->paginate($search);
        return view('admin.equipments.index', compact('equipments', 'search'));
    }

    public function create(Admin\Equipment\CreateRequest $request)
    {
        $units = Unit::all()->pluck('name', 'id');
        return view('admin.equipments.create', compact('units'));
    }

    public function edit(Admin\Equipment\EditRequest $request, EquipmentCategory $equipment)
    {
        $units = Unit::all()->pluck('name', 'id');
        return view('admin.equipments.edit', compact('equipment', 'units'));
    }

    public function show(Admin\Equipment\IndexRequest $request, EquipmentCategory $equipment)
    {
        return view('admin.equipments.show', compact('equipment'));
    }

    public function store(Admin\Equipment\StoreRequest $request)
    {

        $equipment = (new EquipmentCategoryService())->create($request->all());

        return redirect()->route('admin.equipments.create')->with('message', 'Registro criado com sucesso');
    }

    public function update(Admin\Equipment\UpdateRequest $request, EquipmentCategory $equipment)
    {
        $equipment = (new EquipmentCategoryService())->update($equipment, $request->all());

        return redirect()->route('admin.equipments.edit', $equipment)->with('message', 'Registro alterado com sucesso');
    }

    public function destroy(Admin\Equipment\DestroyRequest $request, EquipmentCategory $equipment)
    {
        (new EquipmentCategoryService())->destroy($equipment);
        return redirect()->route('admin.equipments.index')->with('message', 'Registro deletado com sucesso');
    }
}
