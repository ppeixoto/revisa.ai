<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Arr;

class UserService
{

    public function paginate(string $search = null): \Illuminate\Pagination\LengthAwarePaginator
    {
        $users = User::where(function ($query) use ($search) {
            if ($search) {
                $query->whereLike('name', $search)->orWhereLike('email', $search);
            }
        })->orderBy('name')->paginate();
        $users->appends(['search' => $search]);
        return $users;
    }

    public function create(array $data): User
    {
        Arr::set($data, 'password', bcrypt(Arr::get($data, 'password')));

        $user = User::create($data);

        $user->assignRole('customer');

        return $user;
    }

    public function update(User $user, array $data): User
    {
        if (empty(Arr::get($data, 'password'))) {
            Arr::forget($data, 'password');
        } else {
            Arr::set($data, 'password', bcrypt(Arr::get($data, 'password')));
        }
        $user->update($data);

        return $user->refresh();
    }

    public function destroy(User $user): bool
    {
        return $user->delete();
    }
}
