<?php

use Illuminate\Support\Facades\Route;
use App\Menu;
use App\Footer;
use App\Banniere_home;
use App\Banniere_home2;
use App\About;
use App\Video;
use App\Testimonials1;
use App\Testimonials2;

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
    $footers = Footer::all();
    $banniere_homes = Banniere_home::all();
    $banniere_homes2 = Banniere_home2::all();
    $abouts = About::all();
    $videos = Video::all();
    $testimonials1 = Testimonials1::all();
    $testimonials2 = Testimonials2::all();

    return view('home/index', compact('menus', 'footers', 'banniere_homes', 'banniere_homes2', 'abouts', 'videos', 'testimonials1', 'testimonials2'));
})->name('home');

//Page Services
Route::get('/services', function () {
    $menus = Menu::all();
    $footers = Footer::all();

    return view('services/index', compact('menus', 'footers'));
})->name('services');

//Page Blog
Route::get('/blog', function () {
    $menus = Menu::all();
    $footers = Footer::all();

    return view('blog/index', compact('menus', 'footers'));
})->name('blog');

//Page Blog-Post
Route::get('/blog-post', function () {
    $menus = Menu::all();
    $footers = Footer::all();

    return view('blog-post/index', compact('menus', 'footers'));
})->name('blog-post');

//Page Contact
Route::get('/contact', function () {
    $menus = Menu::all();
    $footers = Footer::all();

    return view('contact/index', compact('menus', 'footers'));
})->name('contact');

// //Coté Admin
// Route::group(['middleware' => ['auth']], function(){

    //Page Admin
    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin');

    //CONTROLLERS
    //Menu
    Route::resource('/admin/menu', 'MenuController');
    //Footer
    Route::resource('/admin/footer', 'FooterController');
    //Banniere Home
    Route::resource('/admin/banniere-home', 'BanniereHomeController');
    Route::resource('/admin/banniere-home2', 'BanniereHome2Controller');
    //About
    //About Us
    Route::resource('/admin/about', 'AboutController');
    //About Video
    Route::resource('/admin/video', 'VideoController');
    //Testimonials
    //Testimonials1
    Route::resource('/admin/testimonials1', 'Testimonials1Controller');
    //Testimonials2
    Route::resource('/admin/testimonials2', 'Testimonials2Controller');


// });

Auth::routes();

Route::get('/home2', 'HomeController@index')->name('home2');
