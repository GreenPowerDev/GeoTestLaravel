<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class EmailSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    public function handle() 
    {
        $users = User::all(); 
        foreach ($users as $user) {
            Mail::to($user->email)->send(new TestEmail());
        }  
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

}
