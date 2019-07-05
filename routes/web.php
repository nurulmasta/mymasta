<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    
    $users= App\User::find(4);

    //return $users->company->first()->name;
    return $users->company[1]->name;
    
    

    foreach ($users->company as $user) {
         return $user->registration_number;
      }


    //dd($users->company;
    //->companies->full_name
});

Route::get('/Profile','ProfileController@index');
Route::post('/Profile/{id}/edit','ProfileController@edit');

Route::get('/PostRegister','ProfileController@PostRegister');
Route::get('/logout','Auth\LoginController@logout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
