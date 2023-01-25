<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'buyer_email',
    ];
}
