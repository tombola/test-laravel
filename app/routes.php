<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('home', 'PagesController@home');
Route::get('/', function () 
{
  // $user = DB::table('users')->find(1);
  $users = DB::table('users')->where('username', '!=', 'tombola')->get();

  // dd($users);
  return $users;
});

Route::get('closure', function()
{
	return View::make('hello');
});
