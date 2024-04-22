<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class InitDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup the database and control shout it not exist';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }

    public function createTable(): string
    {
        printf("creating");
        return "creating string";
        
        // upon further reading 'php artisan make:migration {name}' will do what i want
    }
}
