<?php

namespace App\Http\Controllers\Admin;

use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Models\Artist\Category;

class CategoryController extends Controller
{
    public function index(Admin\Category\IndexRequest $request)
    {
        $search = $request->get('search');
        $categories = (new CategoryService)->paginate($search);
        return view('admin.categories.index', compact('categories', 'search'));
    }

    public function create(Admin\Category\CreateRequest $request)
    {
        return view('admin.categories.create');
    }

    public function edit(Admin\Category\EditRequest $request, Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function show(Admin\Category\IndexRequest $request, Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function store(Admin\Category\StoreRequest $request)
    {
        $category = (new CategoryService())->create($request->validated());

        return redirect()->route('admin.categories.create')->with('message', 'Registro criado com sucesso');
    }

    public function update(Admin\Category\UpdateRequest $request, Category $category)
    {
        $category = (new CategoryService())->update($category, $request->validated());

        return redirect()->route('admin.categories.edit', $category)->with('message', 'Registro alterado com sucesso');
    }

    public function destroy(Admin\Category\DestroyRequest $request, Category $category)
    {
        (new CategoryService())->destroy($category);
        return redirect()->route('admin.categories.index')->with('message', 'Registro deletado com sucesso');
    }
}
