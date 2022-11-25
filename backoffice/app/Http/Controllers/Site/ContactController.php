<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Contact\StoreOrderRequest;
use App\Http\Requests\Site\Contact\StoreRequest;
use App\Services\ContactService;

class ContactController extends Controller
{
    public function index()
    {
        $faq = array();
        return view('site.contact', compact('faq'));
    }

    public function store(StoreRequest $request)
    {
        (new ContactService)->create($request->all());
        return redirect()->back()->with('message', 'Seu contato foi registrado com sucesso.');
    }

    public function storeWithOrder(StoreOrderRequest $request)
    {
        dd($request->all());
    }
}
