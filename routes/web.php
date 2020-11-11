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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/expertise', 'HomeController@expertise')->name('expertise');
Route::get('/expertise/human-resource-management', 'HomeController@hcm')->name('expertise.hcm');
Route::get('/expertise/industrial-relation', 'HomeController@industrialrel')->name('expertise.industrialrel');
Route::get('/expertise/headhunting-service', 'HomeController@headhunting')->name('expertise.headhunting');
Route::get('/cases', 'HomeController@cases')->name('cases');
Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/partnerships', 'HomeController@partnerships')->name('partnerships');
Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::get('/admin-page', 'AdminPageController@page')->name('adminpage');

