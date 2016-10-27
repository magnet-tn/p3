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
Route::get('/lorem', 'LoremIpsumController@index')->name('lorem.index');

# Show a form to create user information
Route::get('/user', 'UserController@index')->name('user.index');


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
