<?php

namespace App\Http\Controllers\Admin;

use App\Services\MusicGenreService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin;
use App\Models\Artist\MusicGenre;

class MusicGenreController extends Controller
{
    public function index(Admin\MusicGenre\IndexRequest $request)
    {
        $search = $request->get('search');
        $musicgenres = (new MusicGenreService)->paginate($search);
        return view('admin.musicgenres.index', compact('musicgenres', 'search'));
    }

    public function create(Admin\MusicGenre\CreateRequest $request)
    {
        return view('admin.musicgenres.create');
    }

    public function edit(Admin\MusicGenre\EditRequest $request, MusicGenre $musicgenre)
    {
        return view('admin.musicgenres.edit', compact('musicgenre'));
    }

    public function show(Admin\MusicGenre\IndexRequest $request, MusicGenre $musicgenre)
    {
        return view('admin.musicgenres.show', compact('musicgenre'));
    }

    public function store(Admin\MusicGenre\StoreRequest $request)
    {
        $musicgenre = (new MusicGenreService())->create($request->validated());

        return redirect()->route('admin.musicgenres.create')->with('message', 'Registro criado com sucesso');
    }

    public function update(Admin\MusicGenre\UpdateRequest $request, MusicGenre $musicgenre)
    {
        $musicgenre = (new MusicGenreService())->update($musicgenre, $request->validated());

        return redirect()->route('admin.musicgenres.edit', $musicgenre)->with('message', 'Registro alterado com sucesso');
    }

    public function destroy(Admin\MusicGenre\DestroyRequest $request, MusicGenre $musicgenre)
    {
        (new MusicGenreService())->destroy($musicgenre);
        return redirect()->route('admin.musicgenres.index')->with('message', 'Registro deletado com sucesso');
    }
}
