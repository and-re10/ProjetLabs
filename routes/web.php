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
use App\Message;
use App\BtnForm;
use App\ServicesPrimes;
use App\Newsletter;
use App\Article;
use App\Tag;
use App\Categorie;
use App\PostComment;

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
    $messages = Message::all();
    $btnForms = BtnForm::all();
    $servs = Service2::orderBy('id', 'desc')->paginate(9);

    return view('home/index', compact('menus', 'footers', 'banniere_homes', 'banniere_homes2', 'abouts', 'videos', 'testimonials1', 'testimonials2', 'teams1', 'teams2', 'readys', 'services1', 'services2', 'infoContacts', 'messages', 'btnForms', 'servs'));
})->name('home');

//Page Services
Route::get('/services', function () {
    $menus = Menu::all();
    $footers = Footer::all();
    $services1 = Service1::all();
    $services2 = Service2::all();
    $servs = Service2::orderBy('id', 'desc')->paginate(9);
    $infoContacts = InfoContact::all();
    $messages = Message::all();
    $btnForms = BtnForm::all();
    $servicesPrimes = ServicesPrimes::all();
    $newsletters = Newsletter::all();
    

    return view('services/index', compact('menus', 'footers', 'services1', 'services2', 'servs', 'infoContacts', 'messages', 'btnForms', 'servicesPrimes', 'newsletters'));
})->name('services');

//Page Blog
Route::get('/blog', function () {
    $menus = Menu::all();
    $footers = Footer::all();
    $newsletters = Newsletter::all();
    $articles = Article::all();
    $tags = Tag::all();
    $categories = Categorie::all();
    // $categorie = Categorie::find($id);

    return view('blog/index', compact('menus', 'footers', 'newsletters', 'articles', 'tags', 'categories'));
})->name('blog');

//Page Blog-Post
Route::get('/blog-post', function () {
    $menus = Menu::all();
    $footers = Footer::all();
    $newsletters = Newsletter::all();
    $tags = Tag::all();
    $categories = Categorie::all();
    $postComments = PostComment::all();

    return view('blog-post/index', compact('menus', 'footers', 'newsletters', 'tags', 'categories', 'postComments'));
})->name('blog-post');

//Page Contact
Route::get('/contact', function () {
    $menus = Menu::all();
    $footers = Footer::all();
    $infoContacts = InfoContact::all();
    $messages = Message::all();
    $btnForms = BtnForm::all();
 
    return view('contact/index', compact('menus', 'footers', 'infoContacts', 'messages', 'btnForms'));
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
    //Formulaire/mail
    Route::resource('/admin/contact-messages', 'MessagesController');
    //Bouton du Formulaire
    Route::resource('/admin/bouton-form', 'BtnFormController');
    //Services Primés
    Route::resource('/admin/services-primes', 'ServicesPrimesController');
    //Newsletter
    Route::resource('/admin/newsletter', 'NewslettersController');
    //Articles
    Route::resource('/admin/articles', 'ArticlesController');
    //Tags
    Route::resource('/admin/tags', 'TagsController');
    //Categories
    Route::resource('/admin/categories', 'CategoriesController');
    //Post-Comments
    Route::resource('/admin/post-comments', 'PostCommentsController');


// });

Auth::routes();

Route::get('/home2', 'HomeController@index')->name('home2');
