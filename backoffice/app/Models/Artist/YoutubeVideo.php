<?php

namespace App\Models\Artist;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeVideo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'youtube_videos';

    protected $fillable = [
        'link',
        'approved'
    ];
}
