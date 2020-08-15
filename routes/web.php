<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/activity', function (){
    return view('content.activity');
})->name('activity');

Route::get('/contact', function (){
    return view('user.contact');
})->name('contact');



Route::prefix('user')->group(function (){
    Route::get('/profile',function (){
        return view('user.profile') ;
    })->name('user.profile');
});

Route::get('/admin/profile',function (){
    return view('admin.adminHome');
})->name('admin.profile');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::resource('/articles', 'PostsController');
