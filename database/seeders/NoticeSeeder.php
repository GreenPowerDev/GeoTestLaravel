<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Notice::create([
            'notice_date'=>'○○○○年○○月○○日',
            'notice_title'=>'Dummy Title',
            'notice_context'=>'Dummy Text Dummy Text Dum…',
            'ntice_img_url'=>asset('img/top/test_area/top_fukuoka.png')
        ]);
        Notice::create([
            'notice_date'=>'○○○○年○○月○○日',
            'notice_title'=>'Dummy Title',
            'notice_context'=>'Dummy Text Dummy Text Dum…',
            'ntice_img_url'=>asset('img/top/test_area/top_fukuoka.png')
        ]);
        Notice::create([
            'notice_date'=>'○○○○年○○月○○日',
            'notice_title'=>'Dummy Title',
            'notice_context'=>'Dummy Text Dummy Text Dum…',
            'ntice_img_url'=>asset('img/top/test_area/top_fukuoka.png')
        ]);
        Notice::create([
            'notice_date'=>'○○○○年○○月○○日',
            'notice_title'=>'Dummy Title',
            'notice_context'=>'Dummy Text Dummy Text Dum…',
            'ntice_img_url'=>asset('img/top/test_area/top_fukuoka.png')
        ]);
        Notice::create([
            'notice_date'=>'○○○○年○○月○○日',
            'notice_title'=>'Dummy Title',
            'notice_context'=>'Dummy Text Dummy Text Dum…',
            'ntice_img_url'=>asset('img/top/test_area/top_fukuoka.png')
        ]);
        Notice::create([
            'notice_date'=>'○○○○年○○月○○日',
            'notice_title'=>'Dummy Title',
            'notice_context'=>'Dummy Text Dummy Text Dum…',
            'ntice_img_url'=>asset('img/top/test_area/top_fukuoka.png')
        ]);
        
    }
}
