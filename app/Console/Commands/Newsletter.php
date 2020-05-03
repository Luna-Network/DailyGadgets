<?php

namespace App\Console\Commands;

use App\Mail\NewsMail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Newsletter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send newsletter every month for subscribed users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::where('subscribed', true)->get();
        $data = '';

        foreach ($users as $user){
            Mail::to($user->email)->send(new NewsMail($data));
        }
    }
}
