<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class createUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:newUser {--nm=} {--em=} {--pw=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'connect to our DB and cearte new user on users table';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $username = $this->option('nm');
        $email = $this->option('em');
        $password = $this->option('pw');



        $user = User::create([
            'name' => $username ? $username : 'newuser',
            'email' => $email ? $email : 'default@company.com',
            'password' => $password ? \bcrypt($password) : \bcrypt(123456)
        ]);
        if($user) {
            $this->info('user added succesfully');
        }
    }
}
