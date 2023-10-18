<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class makeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:newView {viewname}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function getFullPath($arg)
    {
        $myview = \str_replace('.', '/', $arg) . '.blade.php';
        return 'resources/views/' . $myview ;
    }

    public function checkFolder($path)
    {
        $dir = dirname($path);
        if(! file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

    }

    public function handle()
    {
        $arg = $this->argument('viewname');
        $path =  $this->getFullPath($arg);
        $this->checkFolder($path);
        if(File::exists($path)) {
            $this->error('your file is already exist !!!');
        } else {
            File::put($path, $path);
            $this->info('your file is added success');
        }
    }


}
