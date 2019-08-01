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

Route::get('/', function(){
    return view('welcome');
})->name('homepage');

Route::get('/dataintake', function(){
    return view('dataintake');
})->name('dataintakeroute');

Route::post('/dataintake','IntakeController@intake');

Route::get('/dataview','ShowController@show')->name('dataviewroute');

Route::post('/dataview', 'ShowController@matchquery')->name('searchroute');

Route::get('/graph','DataGraphController@graph')->name('graphroute');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{id}','ProfileController@profileshow')->name('profile');

Route::get('/aboutus', function(){
    return view('aboutus');
});
