<?php

namespace App\Services;

use App\Models\Artist\MusicGenre;

class MusicGenreService
{

    public function paginate(string $search = null): \Illuminate\Pagination\LengthAwarePaginator
    {
        $musicgenres = MusicGenre::where(function ($query) use ($search) {
            if ($search) {
                $query->whereLike('name', $search);
            }
        })->orderBy('name')->paginate();
        $musicgenres->appends(['search' => $search]);
        return $musicgenres;
    }

    public function create(array $data): MusicGenre
    {
        return MusicGenre::create($data);
    }

    public function update(MusicGenre $musicgenre, array $data): MusicGenre
    {
        $musicgenre->update($data);
        return $musicgenre->refresh();
    }

    public function destroy(MusicGenre $musicgenre): bool
    {
        return $musicgenre->delete();
    }
}
