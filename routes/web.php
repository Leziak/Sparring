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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {

    //PROFILES

    Route::get('/profile/{id?}', 'ProfileController@index')->name('profile');
    Route::get('/profiles', 'ProfilesController@index')->name('profiles');
    Route::get('/editprofile', 'EditProfileController@index')->name('edit_profile');
    Route::post('/editprofile', 'EditProfileController@store')->name('edit_profile_post');

    //GYMS

    Route::get('/gym/{id}', 'GymController@index')->name('gym');
    Route::get('/gyms', 'GymsController@index')->name('gyms');
    Route::get('/editgym', 'GymsController@index')->name('gyms');
});
