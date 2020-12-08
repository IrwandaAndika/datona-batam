<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/gallery/government', 'HomeController@gallery')->name('gallery.government');
Route::get('/gallery/private', 'HomeController@gallery')->name('gallery.private');
Route::get('/admin-page', 'AdminPageController@page')->name('adminpage');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// dashboard Testimonials
Route::get('/testimonials-page', 'AdminPageController@testi')->name('admin.testimonials');
Route::post('/testimonials/store', 'AdminPageController@testistore');
Route::get('/testimonials/edit/{id}', 'AdminPageController@edit');
Route::post('/testimonials/update', 'AdminPageController@update');
Route::get('/testimonials/delete/{id}', 'AdminPageController@delete');
// Dashboard Cases
Route::prefix('admin')->group(function () {
    // Dashboard Route
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Login Route
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    // Route Logout
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Route Register
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
});

