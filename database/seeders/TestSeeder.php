<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::create([
            'name'=>'aaa',
            'test_date'=> Carbon::parse('2023-06-12'),
            'begin_time'=>'15:50:00',
            'end_time'=>'16:00:00',
            'ganre_id'=>'2',
            'level_id'=>'1',
            'province_id'=>'2',
            'price'=>'4500'
        ]);
        Test::create([
            'name'=>'bbb',
            'test_date'=>Carbon::parse('2023-06-19'),
            'begin_time'=>'15:00:00',
            'end_time'=>'16:00:00',
            'ganre_id'=>'3',
            'level_id'=>'2',
            'province_id'=>'2',
            'price'=>'3000'
        ]);
        Test::create([
            'name'=>'ccc',
            'test_date'=>Carbon::parse('2024-07-13'),
            'begin_time'=>'19:00:00',
            'end_time'=>'20:00:00',
            'ganre_id'=>'2',
            'level_id'=>'1',
            'province_id'=>'2',
            'price'=>'1000'
        ]);
        Test::create([
            'name'=>'ddd',
            'test_date'=>Carbon::parse('2023-06-21'),
            'begin_time'=>'17:00:00',
            'end_time'=>'18:00:00',
            'ganre_id'=>'1',
            'level_id'=>'1',
            'province_id'=>'2',
            'price'=>'6000'
        ]);
        Test::create([
            'name'=>'eee',
            'test_date'=>Carbon::parse('2023-06-24'),
            'begin_time'=>'11:00:00',
            'end_time'=>'11:30:00',
            'ganre_id'=>'2',
            'level_id'=>'1',
            'province_id'=>'2',
            'price'=>'8000'
        ]);
        Test::create([
            'name'=>'fff',
            'test_date'=>Carbon::parse('2023-06-23'),
            'begin_time'=>'12:00:00',
            'end_time'=>'14:00:00',
            'ganre_id'=>'2',
            'level_id'=>'3',
            'province_id'=>'2',
            'price'=>'7500'
        ]);
        Test::create([
            'name'=>'ggg',
            'test_date'=>Carbon::parse('2023-06-17'),
            'begin_time'=>'09:00:00',
            'end_time'=>'09:30:00',
            'ganre_id'=>'1',
            'level_id'=>'2',
            'province_id'=>'2',
            'price'=>'3000'
        ]);
        Test::create([
            'name'=>'hhh',
            'test_date'=>Carbon::parse('2023-06-31'),
            'begin_time'=>'12:00:00',
            'end_time'=>'13:00:00',
            'ganre_id'=>'5',
            'level_id'=>'3',
            'province_id'=>'2',
            'price'=>'2500'
        ]);
    }
}
