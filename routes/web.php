<?php

use App\User;
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

//Route::get('/login','LoginController@login')->name('login');

Route::prefix('user')->group(function (){
    Route::get('/profile',function (){
        return view('user.profile') ;

    })->name('user.profile');
});

Route::prefix('admin')->group(function () {

    Route::get('/profile', function () {
        return view('admin.adminHome');
    })->name('admin.profile');

    Route::get('/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

});

//Route::get('/login', 'auth\LoginController@login')->name('login');
//Route::get('/logout', 'LoginController@logout')->name('logout');

//ARTICLE
Route::resource('/articles', 'ArticleController')->names([
    'index' => 'articles.index',
    'create' => 'articles.create',
    'update' => 'articles.update',
    'edit' => 'articles.edit',
    'destroy' => 'articles.destroy'
]);

Route::post('/article/{id}/edit', [
    'uses' => 'ArticleController@update',
    'as' => 'article.update'
]);
//Route::get('/article/{id}/delete', [
//    'uses' => 'ArticleController@destroy',
//    'as' => 'article.delete'
//]);
//Route::post('/article/search', [
//    'uses' => 'ArticleController@search',
//    'as' => 'article.search'
//]);



Route::post('articles/{id}/comment/add', [
    'uses' => 'CommentsController@store',
    'as' => 'comment.store'
]);
