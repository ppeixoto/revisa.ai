<?php

namespace App\Services;

use App\Models\Artist\Artist;

class ArtistService
{

    public function paginate(string $search = null): \Illuminate\Pagination\LengthAwarePaginator
    {
        $users = Artist::where(function ($query) use ($search) {
            if ($search) {
                $query->whereLike('name', $search);
            }
        })->orderBy('name')->paginate();

        $users->appends(['search' => $search]);

        return $users;
    }

    public function create(array $data): Artist
    {
        return Artist::create($data);
    }

    public function update(Artist $artist, array $data): Artist
    {
        $artist->update($data);

        return $artist->refresh();
    }

    public function destroy(Artist $artist): bool
    {
        return $artist->delete();
    }
}
