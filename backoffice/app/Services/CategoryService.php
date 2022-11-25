<?php

namespace App\Services;

use App\Models\Artist\Category;

class CategoryService
{

    public function paginate(string $search = null): \Illuminate\Pagination\LengthAwarePaginator
    {
        $categories = Category::where(function ($query) use ($search) {
            if ($search) {
                $query->whereLike('name', $search);
            }
        })->orderBy('name')->paginate();
        $categories->appends(['search' => $search]);
        return $categories;
    }

    public function create(array $data): Category
    {
        return Category::create($data);
    }

    public function update(Category $category, array $data): Category
    {
        $category->update($data);
        return $category->refresh();
    }

    public function destroy(Category $category): bool
    {
        return $category->delete();
    }
}
