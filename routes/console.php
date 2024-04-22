<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\InitDatabase;

use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


// uneeded. use 'php artisan make:migration {schema}'
// then 'php artisan migrate'
Artisan::command('app:init-database', function () {
    // $init = new InitDatabase();
    // $init->createTable();

    $api = new API();

    // dd("Getting data...");    
    $api->getApiData();

    // dd("Inserting data...");
    // $api->insertData();

    // $api->removeData();

})->purpose('Initiate databse');


Schedule::call(function () {
    // update user data
    $api = new API();
    $api->getApiData();
    $api->insertData();
})->daily();