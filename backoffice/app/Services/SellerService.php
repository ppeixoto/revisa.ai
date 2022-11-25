<?php

namespace App\Services;

use Exception;
use App\Models\User;
use App\Models\Seller;

class SellerService
{
    public function create(User $user, array $data): Seller
    {
        if ($user->hasSeller()) {
            throw new Exception('Usuário já possui um Seller');
        }

        $seller = $user->seller()->create($data);

        $user->assignRole('seller');

        return $seller;
    }
}
