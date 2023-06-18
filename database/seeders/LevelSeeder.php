<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Level::create([
            'level_num'=>'1',
            'level_name'=>'初級'
        ]);
        Level::create([
            'level_num'=>'2',
            'level_name'=>'中級'
        ]);
        Level::create([
            'level_num'=>'3',
            'level_name'=>'上級'
        ]);
    }
}
