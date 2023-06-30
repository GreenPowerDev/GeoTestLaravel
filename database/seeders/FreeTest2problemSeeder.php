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
            'test_id'=>'1',
            'problem_id' => '2'
        ]);
        FreeTest2problem::create([
            'test_id'=>'2',
            'problem_id' => '5'
        ]);
        FreeTest2problem::create([
            'test_id'=>'3',
            'problem_id' => '6'
        ]);
        FreeTest2problem::create([
            'test_id'=>'4',
            'problem_id' => '4'
        ]);
        FreeTest2problem::create([
            'test_id'=>'5',
            'problem_id' => '8'
        ]);
        FreeTest2problem::create([
            'test_id'=>'6',
            'problem_id' => '9'
        ]);
    }
}
