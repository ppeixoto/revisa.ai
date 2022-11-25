<?php

namespace App\Services;

use App\Models\Artist\Specialty;

class SpecialtyService
{
    public function paginate(string $search = null): \Illuminate\Pagination\LengthAwarePaginator
    {
        $specialties = Specialty::where(function ($query) use ($search) {
            if ($search) {
                $query->whereLike('name', $search);
            }
        })->orderBy('name')->paginate();

        $specialties->appends(['search' => $search]);

        return $specialties;
    }

    public function create(array $data): Specialty
    {
        return Specialty::create($data);
    }

    public function update(Specialty $specialty, array $data): Specialty
    {
        $specialty->update($data);

        return $specialty->refresh();
    }

    public function destroy(Specialty $specialty): bool
    {
        return $specialty->delete();
    }
}
