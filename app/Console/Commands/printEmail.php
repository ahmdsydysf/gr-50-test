<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class printEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:email {email} {pass}';

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

        $email = $this->argument('email');
        $pass = $this->argument('pass');
        if($this->confirm('do you want to print data ??')) {
            $this->info(' email is :' . $email . ' and your password is ::= ' . $pass);

        } else {
            $this->error('end of code');
        }
    }
}
