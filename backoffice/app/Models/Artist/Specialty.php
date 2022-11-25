<?php

namespace App\Models\Artist;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'artist_specialties';

    protected $fillable = [
        'name'
    ];
}
