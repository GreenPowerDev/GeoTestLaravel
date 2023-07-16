<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\AllowedMail;
use Mail;

class TestDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //

// fdfdfsdfsd
//             if ($users->count() > 0) {
//             foreach ($users as $user) {
//                 Mail::to($user)->send(new BirthDayWish($user));
//             }
//             }
$last_notice = Notice::latest()->get();
$mailData = [
    'period'=> 'paris ~ cuba',
    'test_pass_id' => 'greenpower',
    'test_pass_pwd' => 'lightstar',
];
        Mail::to('alexanderklyagin21@gmail.com')->send(new AllowedMail($mailData));
        //print_r($last_notice[0]);
        return 0;
    }
}
