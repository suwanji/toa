<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('test', 'TestController@index');
Route::get('admin', 'AdminController@index');
//Route::get('/', function () {
//    return 'hi';
//   // return view('welcome');
//});
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::resource('tasks', 'TasksController');


// Extra Info


// You may specify a name for a route with the "as" array key:
// You may also specify route names for controller actions: "uses"

/*Now, you may use the route's name when generating URLs or redirects:
$url = route('profile');
$redirect = redirect()->route('profile');
*/
