<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $miguel = User::firstOrCreate(['email' => 'miguel@civis.com.br'], ['name' => 'Miguel Modesto', 'password' => bcrypt('qwe123')]);
        $tulio = Admin::firstOrCreate(['email' => 'tulioyqr@gmail.com'], ['name' => 'Tulio Carvalho', 'password' => bcrypt('qwe123')]);
        $paulo = Admin::firstOrCreate(['email' => 'rfoxtrot@gmail.com'], ['name' => 'Paulo Peixoto', 'password' => bcrypt('qwe123')]);

        $tulio->assignRole('owner');
        $paulo->assignRole('admin');
    }
}
