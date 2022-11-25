<?php

namespace Database\Seeders;

use App\Models\Artist\Category;
use Illuminate\Database\Seeder;
use App\Models\Artist\MusicGenre;
use App\Models\Artist\EquipmentCategory;
use App\Models\Global\Unit;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate(['name' => 'Banda']);
        Category::firstOrCreate(['name' => 'DJ']);
        Category::firstOrCreate(['name' => 'Instrumentista']);
        Category::firstOrCreate(['name' => 'Músico']);
        Category::firstOrCreate(['name' => 'Orquestra']);
        Category::firstOrCreate(['name' => 'Solista Vocal']);
        Category::firstOrCreate(['name' => 'Outros']);

        MusicGenre::firstOrCreate(['name' => 'Axé']);
        MusicGenre::firstOrCreate(['name' => 'Blues']);
        MusicGenre::firstOrCreate(['name' => 'Country']);
        MusicGenre::firstOrCreate(['name' => 'Eletrônica']);
        MusicGenre::firstOrCreate(['name' => 'Forró']);
        MusicGenre::firstOrCreate(['name' => 'Funk']);
        MusicGenre::firstOrCreate(['name' => 'Gospel']);
        MusicGenre::firstOrCreate(['name' => 'Hip Hop']);
        MusicGenre::firstOrCreate(['name' => 'Jazz']);
        MusicGenre::firstOrCreate(['name' => 'MPB']);
        MusicGenre::firstOrCreate(['name' => 'Música clássica']);
        MusicGenre::firstOrCreate(['name' => 'Pagode']);
        MusicGenre::firstOrCreate(['name' => 'Pop']);
        MusicGenre::firstOrCreate(['name' => 'Rap']);
        MusicGenre::firstOrCreate(['name' => 'Reggae']);
        MusicGenre::firstOrCreate(['name' => 'Rock']);
        MusicGenre::firstOrCreate(['name' => 'Samba']);
        MusicGenre::firstOrCreate(['name' => 'Sertanejo']);

        $ml = Unit::where('symbol', 'm')->first();
        $m2 = Unit::where('symbol', 'm²')->first();
        $un = Unit::where('symbol', 'un')->first();

        $palco = EquipmentCategory::firstOrCreate(['name' => 'Palco - Espaço Apresentação']);
        $palco->equipments()->firstOrCreate(['name' => 'Área necessária', 'unit_id' => $m2->id]);
        $palco->equipments()->firstOrCreate(['name' => 'Altura do solo', 'unit_id' => $ml->id]);
        $palco->equipments()->firstOrCreate(['name' => 'Altura do pé-direito', 'unit_id' => $ml->id]);
        $palco->equipments()->firstOrCreate(['name' => 'Largura', 'unit_id' => $ml->id]);
        $palco->equipments()->firstOrCreate(['name' => 'Pronfundidade', 'unit_id' => $ml->id]);

        $iluminacao = EquipmentCategory::firstOrCreate(['name' => 'Iluminação']);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Estrutura de Grid', 'unit_id' => $ml->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Canhão - LED', 'unit_id' => $un->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Canhão - LED - RGBW', 'unit_id' => $un->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Ribalta - LED', 'unit_id' => $un->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Lâmpada PAR', 'unit_id' => $un->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Moving Light', 'unit_id' => $un->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Canhão Seguidor', 'unit_id' => $un->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Strobo - LED', 'unit_id' => $un->id]);
        $iluminacao->equipments()->firstOrCreate(['name' => 'Mini Brut', 'unit_id' => $un->id]);

        $telas = EquipmentCategory::firstOrCreate(['name' => 'Telas para Exibição de Imagens']);
        $telas->equipments()->firstOrCreate(['name' => 'Painel de led', 'unit_id' => $m2->id]);
        $telas->equipments()->firstOrCreate(['name' => 'Tvs', 'unit_id' => $un->id]);

        $som = EquipmentCategory::firstOrCreate(['name' => 'Estrutura de Som']);
        $som->equipments()->firstOrCreate(['name' => 'Caixas Ativas (Grave, Médio e Agudo)', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Line Array - Sub Graves', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Line Array - Altas Frequências', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Caixas de retorno (monitor)', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Amplificador de baixo', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Amplificador de guitarra', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Corpo de bateria', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Microfones ', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Pedestais ', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Cabo P10 (instrumentos)', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Cabo XLR (microfone)', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Cabo AC (energia)', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Estabilizador', 'unit_id' => $un->id]);
        $som->equipments()->firstOrCreate(['name' => 'Extensão', 'unit_id' => $un->id]);

        $energia = EquipmentCategory::firstOrCreate(['name' => 'Estrutura de Energia']);
        $energia->equipments()->firstOrCreate(['name' => 'Gerador', 'unit_id' => $un->id]);
        $energia->equipments()->firstOrCreate(['name' => 'ART do Gerador', 'unit_id' => $un->id]);
    }
}
