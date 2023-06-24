<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Province::create([
            'name'=>'福岡',
            'img_url'=>asset('img/top/test_area/top_fukuoka.png')
        ]);
        Province::create([
            'name'=>'香川',
            'img_url'=>asset('img/top/test_area/top_kagawa.png')
        ]);
        Province::create([
            'name'=>'広島',
            'img_url'=>asset('img/top/test_area/top_hiroshima.png')
        ]);
        Province::create([
            'name'=>'長野',
            'img_url'=>asset('img/top/test_area/top_nagano.png')
        ]);
        Province::create([
            'name'=>'大阪',
            'img_url'=>asset('img/top/test_area/top_akita.png')
        ]);
        Province::create([
            'name'=>'北海道',
            'img_url'=>asset('img/top/test_area/top_hokaido.jpg')
        ]);
        Province::create([
            'name'=>'東京',
            'img_url'=>asset('img/top/test_area/top_tokyo.jpg')
        ]);
        Province::create([
            'name'=>'神奈川',
            'img_url'=>asset('img/top/test_area/top_kanagawa.jpg')
        ]);
        Province::create([
            'name'=>'沖縄',
            'img_url'=>asset('img/top/test_area/top_okinawa.jpg')
        ]);
        Province::create([
            'name'=>'長野',
            'img_url'=>asset('img/top/test_area/top_nagoya.jpg')
        ]);
    }
}
