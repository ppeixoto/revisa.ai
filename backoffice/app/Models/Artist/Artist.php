<?php

namespace App\Models\Artist;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function videos()
    {
        return $this->belongsToMany(YoutubeVideo::class, 'artist_has_youtube_videos');
    }
}
