<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Support\Arr;

class AdminService
{

    public function paginate(string $search = null): \Illuminate\Pagination\LengthAwarePaginator
    {
        $admins = Admin::where(function ($query) use ($search) {
            if ($search) {
                $query->whereLike('name', $search)->orWhereLike('email', $search);
            }
        })->orderBy('name')->paginate();
        $admins->appends(['search' => $search]);
        return $admins;
    }

    public function create(array $data): Admin
    {
        Arr::set($data, 'password', bcrypt(Arr::get($data, 'password')));
        $admin = Admin::create($data);
        return $admin;
    }

    public function update(Admin $admin, array $data): Admin
    {
        if (empty(Arr::get($data, 'password'))) {
            Arr::forget($data, 'password');
        } else {
            Arr::set($data, 'password', bcrypt(Arr::get($data, 'password')));
        }

        $admin->update($data);

        return $admin->refresh();
    }

    public function destroy(Admin $admin): bool
    {
        return $admin->delete();
    }
}
