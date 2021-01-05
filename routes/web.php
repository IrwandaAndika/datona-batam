<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\ImageController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RedirectIfAuthenticated;


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
    return view('home');
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
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// Contact-Us
Route::post('/contact-us/store', 'HomeController@storeContact')->name('contact-store');
// Dashboard Testimonials
Route::get('/testimonials-page', 'TestimonialController@testi')->name('testimonials.page');
Route::get('/testimonials-add', 'TestimonialController@add')->name('testimonials.add');
Route::post('/testimonials-store', 'TestimonialController@testistore')->name('testimonials.store');
Route::get('/testimonials-edit/{id}', 'TestimonialController@edit')->name('testimonials.edit');
Route::post('/testimonials-update/{id}', 'TestimonialController@update')->name('testimonials.update');
Route::get('/testimonials-delete/{id}', 'TestimonialController@delete')->name('testimonials.delete');
Route::get('/testimonials-search', 'TestimonialController@search')->name('testimonials.search');
// Dashboard Expertise
Route::get('/expertises-page', 'ExpertiseController@index')->name('expertises.page');
Route::get('/expertises-add', 'ExpertiseController@add')->name('expertises.add');
Route::post('/expertises-store', 'ExpertiseController@store')->name('expertises.store');
Route::get('/expertises-edit/{id}', 'ExpertiseController@edit')->name('expertises.edit');
Route::post('/expertises-update/{id}', 'ExpertiseController@update')->name('expertises.update');
Route::get('/expertises-delete/{id}','ExpertiseController@delete')->name('expertises.delete');
// Dashboard Cases
Route::get('/cases-page', 'CasesController@index')->name('cases-page');
Route::get('/cases-add', 'CasesController@add')->name('cases-add');
Route::post('/cases-store', 'CasesController@store')->name('cases-store');
Route::get('/cases-edit/{id}', 'CasesController@edit')->name('cases-edit');
Route::post('/cases-update/{id}', 'CasesController@update')->name('cases-update');
Route::get('/cases-delete/{id}', 'CasesController@delete')->name('cases-delete');
// Admin Auth
Route::prefix('admin')->group(function () {
    // Dashboard Route
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@profile')->name('admin.dashboard.profile');
    Route::post('/upload', 'AdminController@upload')->name('admin.dashboard.upload');
    // Inbox
    Route::get('/inbox', 'AdminController@showInbox')->name('admin.inbox');
    Route::get('/inbox-search', 'AdminController@search')->name('admin.inbox.search');
    Route::get('/inbox-delete/{id}', 'AdminController@delete')->name('admin.inbox.delete');
    // Login Route
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    // Route Logout
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Route Register
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    // Route Password Reset
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
});

