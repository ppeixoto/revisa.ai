<?php

namespace App\Models;

use App\Models\Artist\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'document_type',
        'document',
        'razao_social',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function artists()
    {
        return $this->hasMany(Artist::class);
    }
}
