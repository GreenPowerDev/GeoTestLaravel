<?php

namespace Database\Seeders;

use App\Models\FreeTest2problem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FreeTest2problemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FreeTest2problem::create([
            'test_id'=>'1'
        ]);
        FreeTest2problem::create([
            'test_id'=>'2'
        ]);
        FreeTest2problem::create([
            'test_id'=>'3'
        ]);
        FreeTest2problem::create([
            'test_id'=>'4'
        ]);
        FreeTest2problem::create([
            'test_id'=>'5'
        ]);
        FreeTest2problem::create([
            'test_id'=>'6'
        ]);
    }
}
