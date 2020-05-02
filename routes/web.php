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
    return view('index');
});

//Page Home
Route::get('/home', function () {
    return view('home/index');
})->name('home');

//Page Services
Route::get('/services', function () {
    return view('services/index');
})->name('services');

//Page Blog
Route::get('/blog', function () {
    return view('blog/index');
})->name('blog');

//Page Blog-Post
Route::get('/blog-post', function () {
    return view('blog-post/index');
})->name('blog-post');

//Page Contact
Route::get('/contact', function () {
    return view('contact/index');
})->name('contact');

// //Coté Admin
// Route::group(['middleware' => ['auth']], function(){

    //Page Admin
    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin');
// });

Auth::routes();

Route::get('/home2', 'HomeController@index')->name('home2');
