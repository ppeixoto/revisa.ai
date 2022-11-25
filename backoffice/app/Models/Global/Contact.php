<?php

namespace App\Models\Global;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'cpf',
        'phone',
        'message',
        'is_complaint',
        'is_my_order',
        'order_id',
        'buyer_cpf',
        'buyer_email'
    ];
}
