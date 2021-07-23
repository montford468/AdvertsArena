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
Route::get('/categories', function () {
    return  view('categories');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/listing', function () {
    return view('listing');
    
});

Route::get('/blog', function () {
    return view('blog');
    
});

Route::get('/about', function () {
    return view('/about');
    
});

Route::get('/dashboard', function () {
    return view('/dashboard');
    
});

Route::get('/faq', function () {
    return view('/faq');
    
});

Route::get('/payment', function () {
    return view('/payment');
    
});

Route::get('/login', function () {
    return view('/login');
    
});

Route::get('/pricing', function () {
    return view('/pricing');
    
});

Route::get('/register', function () {
    return view('/register');
    
});
Route::get('/services', function () {
    return view('/services');
   
});

Route::get('/postads', function () {
    return view('/postads');
    
});

Route::get('/accountprofile', function () {
    return view('/accountprofile');
    
});

Route::get('/myads', function () {
    return view('/myads');
    
});

Route::get('/favouriteads', function () {
    return view('/favouriteads');
    
});

Route::get('/404', function () {
    return view('/404');
    
});

Route::get('/fogotpassword', function () {
    return view('/fogotpassword');
    
});

Route::get('/privacysetting', function () {
    return view('/privacysetting');
    
});

Route::get('/offermessage', function () {
    return view('/offermessage');
    
});


Route::get('/singlepost', function () {
    return view('/singlepost');
    
});

Route::get('/adsdetail', function () {
    return view('/adsdetail');
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
