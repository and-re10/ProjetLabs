<?php

use Illuminate\Support\Facades\Route;
use App\Menu;

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
    $menus = Menu::all();

    return view('home/index', compact('menus'));
})->name('home');

//Page Services
Route::get('/services', function () {
    $menus = Menu::all();

    return view('services/index', compact('menus'));
})->name('services');

//Page Blog
Route::get('/blog', function () {
    $menus = Menu::all();

    return view('blog/index', compact('menus'));
})->name('blog');

//Page Blog-Post
Route::get('/blog-post', function () {
    $menus = Menu::all();

    return view('blog-post/index', compact('menus'));
})->name('blog-post');

//Page Contact
Route::get('/contact', function () {
    $menus = Menu::all();

    return view('contact/index', compact('menus'));
})->name('contact');

// //Coté Admin
// Route::group(['middleware' => ['auth']], function(){

    //Page Admin
    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin');

    //OTHERS
    //MENU
    Route::resource('/admin/menu', 'MenuController');

// });

Auth::routes();

Route::get('/home2', 'HomeController@index')->name('home2');
