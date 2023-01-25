<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'path',
        'extension',
        'mime_type',
        'size',
        'hash',
        'disk',
        'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
