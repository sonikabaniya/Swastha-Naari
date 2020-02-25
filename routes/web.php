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
    return view('index');
})->name('homepage');

Route::get('/dataintake', function(){
    return view('dataintake');
})->name('dataintakeroute')->middleware('role:2,1,3');

Route::post('/dataintake','PersonalDataController@intake')->middleware('role:2,1,3');

Route::get('/dataview','ShowController@show')->name('dataviewroute')->middleware('role:2,1,3');

Route::post('/dataview', 'ShowController@matchquery')->name('searchroute')->middleware('role:2,1');

Route::get('/graph','DataGraphController@graph')->name('graphroute')->middleware('role:2,1,3');

Auth::routes();

Route::get('register_health_center', [
    'as' => 'register_health_center',
    'uses' => 'Auth\RegisterController@showHealthCenterRegistrationForm'
  ]);

Route::post('register_health_center', [
    'as' => 'register_health_center',
    'uses' => 'Auth\RegisterController@registerHealthCenter'
  ]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{id}','ProfileController@profileshow')->name('profile');
Route::get('/userprofile/{id}','ProfileController@userprofileshow')->name('userprofile');

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::post('/',"HomeController@contact")->name('contact.team');

Route::get('/superAdmin','superAdmin\orgListController@orgList')->name('orgListRoute')->middleware('role:1');


Route::get('/role3',function(){
    return 'role3';
})->middleware('role:3');
