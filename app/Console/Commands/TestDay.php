<?php

namespace App\Console\Commands;
// use Illuminate\Support\HtmlString;
use Illuminate\Console\Command;
use App\Models\Test;
use App\Console\Kernel;
// use Carbon\Carbon;
// use Mail;

class TestDay extends Command
{
    /**
     * @var string
     */
    protected $signature = 'test-day';

    /**
     * @var string
     */
    protected $description = 'Command description';

    public function handle()
    {
        $tests = Test::where('test_date', Carbon::now())->get();
        if($tests){
            foreach($tests as $test){
                $test2users = Test2user::where('test_id', $test->test_id)->get();
                if($test2users){
                    foreach($test2users as $test2user){
                        $users = User::where('user_id', $test2user->user_id)->get();
                        foreach($users as $user){
                            Mail::to($user->email)->send(new TestDay($user));
                        }
                    }
                }
            }
        }
        


        $test = new Test();
        //$test->save();

        // if ($test) {
        // $test->delete();
        // }

        // dd($tests);
        return 0;
    }
}
