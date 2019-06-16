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
});

Route::get('/dataintake', function(){
    return view('dataintake');
})->name('dataintakeroute');

Route::post('/dataintake','IntakeController@intake');

Route::get('/dataview','ShowController@show')->name('dataviewroute');

// Route::get('/dataview', function(){
//     return view('dataview');
// })->name('dataviewroute');