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
use App\Team1;
use App\Team2;
use App\Ready;
use App\Service1;
use App\Service2;
use App\InfoContact;

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
    $teams1 = Team1::all();
    $teams2 = Team2::all();
    $readys = Ready::all();
    $services1 = Service1::all();
    $services2 = Service2::all();
    $infoContacts = InfoContact::all();

    return view('home/index', compact('menus', 'footers', 'banniere_homes', 'banniere_homes2', 'abouts', 'videos', 'testimonials1', 'testimonials2', 'teams1', 'teams2', 'readys', 'services1', 'services2', 'infoContacts'));
})->name('home');

//Page Services
Route::get('/services', function () {
    $menus = Menu::all();
    $footers = Footer::all();
    $services1 = Service1::all();
    $services2 = Service2::all();
    $infoContacts = InfoContact::all();

    return view('services/index', compact('menus', 'footers', 'services1', 'services2', 'infoContacts'));
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
    $infoContacts = InfoContact::all();

    return view('contact/index', compact('menus', 'footers', 'infoContacts'));
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
    //Team
    //Team1
    Route::resource('/admin/team1', 'Team1Controller');
    //Team2
    Route::resource('/admin/team2', 'Team2Controller');
    //Ready
    Route::resource('/admin/ready', 'ReadyController');
    //Service
    //Service1
    Route::resource('/admin/service1', 'Service1Controller');
    //Service2
    Route::resource('/admin/service2', 'Service2Controller');
    //Contact
    //Info-Contact
    Route::resource('/admin/info-contact', 'InfoContactController');



// });

Auth::routes();

Route::get('/home2', 'HomeController@index')->name('home2');
