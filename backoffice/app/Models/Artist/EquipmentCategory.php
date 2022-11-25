<?php

namespace App\Models\Artist;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'icon'
    ];

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }
}
