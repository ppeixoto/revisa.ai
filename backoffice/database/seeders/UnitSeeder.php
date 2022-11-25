<?php

namespace Database\Seeders;

use App\Models\Global\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::firstOrCreate(['name' => 'Unidade', 'symbol' => 'un']);
        Unit::firstOrCreate(['name' => 'Metro Linear', 'symbol' => 'm']);
        Unit::firstOrCreate(['name' => 'Metro Quadrado', 'symbol' => 'm²']);
    }
}
