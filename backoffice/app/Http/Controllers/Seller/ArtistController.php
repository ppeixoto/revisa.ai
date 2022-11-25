<?php

namespace App\Http\Controllers\Seller;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Address\State;
use App\Services\UserService;
use App\Models\Artist\Category;
use App\Services\ArtistService;
use App\Models\Artist\Specialty;
use App\Models\Artist\MusicGenre;
use App\Http\Controllers\Controller;
use App\Models\Artist\EquipmentCategory;
use App\Http\Requests\Admin\User\EditUserRequest;
use App\Http\Requests\Admin\User\CreateUserRequest;

class ArtistController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $artists = (new ArtistService())->paginate($search);

        return view('seller.artists.index', compact('artists', 'search'));
    }

    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        $genres = MusicGenre::all()->pluck('name', 'id');
        $specialities = Specialty::all()->pluck('name', 'id');
        $equipment_categories = EquipmentCategory::all()->pluck('name', 'id');
        $years = array_combine(range(date(' Y'), date('Y') - 100), range(date(' Y'), date('Y') - 100));
        $band_members_transport = array_combine(range(0, 50), range(0, 50));
        $states = State::all()->mapWithKeys(function ($item) {
            return [$item->id => $item->uf . ' - ' . $item->name];
        });
        $holidays = [
            1 => 'Semana Santa',
        ];

        return view('seller.artists.create', compact('categories', 'genres', 'years', 'states', 'specialities', 'holidays', 'band_members_transport', 'equipment_categories'));
    }

    public function edit(User $user)
    {
        return view('seller.artists.edit', compact('user'));
    }

    public function show(User $user)
    {
        return view('seller.artists.show', compact('user'));
    }

    public function store(CreateUserRequest $request)
    {
        $user = (new UserService())->create($request->validated());

        return redirect()->route('seller.artists.create')->with('message', 'Registro criado com sucesso');
    }

    public function update(User $user, EditUserRequest $request)
    {
        $user = (new UserService())->update($user, $request->validated());

        return redirect()->route('seller.artists.edit', $user)->with('message', 'Registro alterado com sucesso');
    }

    public function destroy(User $user)
    {
        (new UserService())->destroy($user);

        return redirect()->route('seller.artists.index')->with('message', 'Registro deletado com sucesso');
    }
}
