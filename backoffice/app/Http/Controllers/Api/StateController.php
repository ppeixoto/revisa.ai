<?php

namespace App\Http\Controllers\Api;

use App\Models\Address\State;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CityResource;
use App\Http\Resources\Api\StateResource;

class StateController extends Controller
{
    public function index()
    {
        return StateResource::collection(State::all());
    }

    public function show(State $state)
    {
        return CityResource::collection($state->cities);
    }
}
