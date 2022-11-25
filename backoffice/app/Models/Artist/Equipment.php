<?php

namespace App\Models\Artist;

use App\Models\Global\Unit;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "equipments";

    protected $fillable = [
        'name',
        'artist_id',
        'equipment_category_id',
        'unit_id',
        'description'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function isAssociated()
    {
        return ($this->id % 2 == 0);
    }
}
