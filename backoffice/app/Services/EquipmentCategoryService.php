<?php

namespace App\Services;

use App\Models\Artist\EquipmentCategory;
use Illuminate\Support\Arr;

class EquipmentCategoryService
{

    public function paginate(string $search = null): \Illuminate\Pagination\LengthAwarePaginator
    {
        $categories = EquipmentCategory::where(function ($query) use ($search) {
            if ($search) {
                $query->whereLike('name', $search);
            }
        })->orderBy('name')->paginate();
        $categories->appends(['search' => $search]);
        return $categories;
    }

    public function create(array $data): EquipmentCategory
    {
        $equipmentCategory = EquipmentCategory::create($data);
        $this->createEquipments($equipmentCategory, collect(Arr::get($data, 'equipments')));
        return $equipmentCategory;
    }

    public function createEquipments(EquipmentCategory $equipmentCategory, $equipments): void
    {
        $equipments->each(function ($equipment) use ($equipmentCategory) {
            $equipmentCategory->equipments()->updateOrCreate(['id' => Arr::get($equipment, 'id')], $equipment);
        });
    }

    public function updateEquipments(EquipmentCategory $equipmentCategory, $equipments): void
    {
        $equipmentCategory->equipments()->get()->each(function ($equipment) use ($equipments) {
            if (!in_array($equipment->id, $equipments->pluck('id')->toArray())) {
                $equipment->delete();
            }
        });
        $this->createEquipments($equipmentCategory, $equipments);
    }

    public function update(EquipmentCategory $equipmentCategory, array $data): EquipmentCategory
    {
        $equipmentCategory->update($data);
        $this->updateEquipments($equipmentCategory, collect(Arr::get($data, 'equipments')));
        return $equipmentCategory->refresh();
    }

    public function destroy(EquipmentCategory $equipmentCategory): bool
    {
        $equipmentCategory->equipments()->delete();
        return $equipmentCategory->delete();
    }
}
