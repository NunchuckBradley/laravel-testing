<?php

use Illuminate\Support\Facades\Route;

// using blade front end views
// Route::get('/about', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('home');
// });




Route::get('/api/users', function () {
    // $users = DB::table('users')->get();
    $api = new API();
    // $api->getApiData();
    // $api->insertData();
    $api->loadData();
    $users = $api->data;
    return $users;
});


// using vue js routeing and front end views for every other route
Route::get('/{any?}', [
    function () {
        return view('home');
    }
])->where('any', '.*');