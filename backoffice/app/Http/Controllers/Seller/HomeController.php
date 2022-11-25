<?php

namespace App\Http\Controllers\Seller;

use App\Services\SellerService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\Auth\StoreRequest;

class HomeController extends Controller
{
    public function index()
    {
        if (auth('user')->user()->hasSeller()) {
            return view('seller.home');
        }

        return view('seller.register');
    }

    public function store(StoreRequest $request)
    {
        (new SellerService())->create(auth('user')->user(), $request->validated());

        return view('seller.home');
    }
}
