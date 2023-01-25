<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::firstOrCreate(['name' => 'Acre', 'uf' => 'AC']);
        State::firstOrCreate(['name' => 'Alagoas', 'uf' => 'AL']);
        State::firstOrCreate(['name' => 'Amazonas', 'uf' => 'AM']);
        State::firstOrCreate(['name' => 'Amapá', 'uf' => 'AP']);
        State::firstOrCreate(['name' => 'Bahia', 'uf' => 'BH']);
        State::firstOrCreate(['name' => 'Ceará', 'uf' => 'CE']);
        State::firstOrCreate(['name' => 'Distrito Federal', 'uf' => 'DF']);
        State::firstOrCreate(['name' => 'Espírito Santo', 'uf' => 'ES']);
        State::firstOrCreate(['name' => 'Goiás', 'uf' => 'GO']);
        State::firstOrCreate(['name' => 'Maranhão', 'uf' => 'MA']);
        State::firstOrCreate(['name' => 'Minas Gerais', 'uf' => 'MG']);
        State::firstOrCreate(['name' => 'Mato Grosso do Sul', 'uf' => 'MS']);
        State::firstOrCreate(['name' => 'Mato Grosso', 'uf' => 'MT']);
        State::firstOrCreate(['name' => 'Pará', 'uf' => 'PA']);
        State::firstOrCreate(['name' => 'Paraíba', 'uf' => 'PB']);
        State::firstOrCreate(['name' => 'Pernambuco', 'uf' => 'PE']);
        State::firstOrCreate(['name' => 'Piauí', 'uf' => 'PI']);
        State::firstOrCreate(['name' => 'Paraná', 'uf' => 'PR']);
        State::firstOrCreate(['name' => 'Rio de Janeiro', 'uf' => 'RJ']);
        State::firstOrCreate(['name' => 'Rio Grande do Norte', 'uf' => 'RN']);
        State::firstOrCreate(['name' => 'Rio Grande do Sul', 'uf' => 'RS']);
        State::firstOrCreate(['name' => 'Rondônia', 'uf' => 'RO']);
        State::firstOrCreate(['name' => 'Roraima', 'uf' => 'RR']);
        State::firstOrCreate(['name' => 'Santa Catarina', 'uf' => 'SC']);
        State::firstOrCreate(['name' => 'Sergipe', 'uf' => 'SE']);
        State::firstOrCreate(['name' => 'São Paulo', 'uf' => 'SP']);
        State::firstOrCreate(['name' => 'Tocantins', 'uf' => 'TO']);
    }
}
