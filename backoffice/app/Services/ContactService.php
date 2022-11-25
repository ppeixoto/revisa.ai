<?php

namespace App\Services;

use App\Models\Global\Contact;
use Exception;
use Illuminate\Support\Arr;

class ContactService
{
    public function create(array $data): Contact
    {
        Arr::set($data, 'is_complaint', Arr::exists($data, 'is_complaint'));
        Arr::set($data, 'is_my_order', !Arr::exists($data, 'is_my_order'));
        return Contact::create($data);
    }
}
