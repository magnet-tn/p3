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

# Show a form to create user information
Route::get('/user', 'UserController@create')->name('user.create');

# Show a test user information
Route::get('/generateusers', 'UserController@generateUsers')->name('generateusers');



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
