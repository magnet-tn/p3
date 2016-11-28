<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

# Show a form to create lorem ipsum text
Route::get('/lorem', 'LoremIpsumController@create')->name('lorem.create');

# Show lorem text
Route::post('/lorem', 'LoremIpsumController@generateLorem');

# Show a form to create user information
Route::get('/user', 'UserController@create')->name('user.create');

# Show user information
Route::post('/user', 'UserController@generateUsers');

# Show a test user information - commented out for final
Route::get('/testusers1', 'UserController@testUsers1')->name('testusers1');

# Show a test user information - commented out for final
Route::get('/testusers2', 'UserController@testUsers2')->name('testusers2');

# Show a test lorem text
Route::get('/testlorem/{qty}/{type}', 'LoremIpsumController@testLorem')->name('testlorem');


/**
* Development related
* Log Viewer - Package loaded for a nice log viewing package
*/
# Make it so the logs can only be seen locally
if(App::environment() == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

Route::get('/', function () {
    return view('welcome');
});
