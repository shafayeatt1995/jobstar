<?php

use Illuminate\Support\Facades\Route;

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


/*--------------------All Auth Route--------------------*/
Route::group(['middleware'=>'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
});


/*--------------------All Admin Route--------------------*/
Route::group(['namespace'=>'Admin','as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');

    // Admin Setting Route
    Route::get('setting/profile','SettingsController@index')->name('setting');
    Route::put('profile-update','SettingsController@update')->name('profile.update');
    Route::get('setting/password','SettingsController@password')->name('password');
    Route::put('password-update','SettingsController@updatePassword')->name('update.password');

    // Admin All Option Route
    Route::resource('option/jobtype','JobtypeController');
    Route::resource('option/career','CareerController');
    Route::resource('option/category','CategoryController');
});

/*--------------------All Employer Route--------------------*/
Route::group(['namespace'=>'Employer','as'=>'employer.','prefix'=>'employer','middleware'=>['auth','employer']], function (){

    // Employer Dashboard Route
    Route::get('dashboard','DashboardController@index')->name('dashboard');

    // Employer Setting Route
    Route::get('setting/profile','SettingsController@index')->name('setting');
    Route::put('profile-update','SettingsController@update')->name('profile.update');
    Route::get('setting/password','SettingsController@password')->name('password');
    Route::put('password-update','SettingsController@updatePassword')->name('update.password');

    //Employer Job Route
    Route::resource('job','JobController');
    Route::resource('test','TestController');
//    Route::put('profile-update','SettingsController@update')->name('profile.update');
});

/*--------------------All Candidate Route--------------------*/
Route::group(['namespace'=>'Candidate','as'=>'candidate.','prefix'=>'candidate','middleware'=>['auth','candidate']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('dashboard','DashboardController@index')->name('profile');
});
