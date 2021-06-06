<!-- 
    CS405_Group 03
    "The Workplace of Today" (Static Website)

    Members:
    Aguilar, Edward John    ->  Assistant Developer
    Batu, Laurence Angelo   ->  Project Leader
                                Main Developer
       
    Chiangco, Crista Mae    ->  Website and Pages Layout Handler
                                Main Designer                         
    Casi, Maria Kyla        ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
    Inodeo, Chara Mae       ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
-->

<?php

use App\Models\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Bacci_Controllers\Bacci_MainController;
use App\Http\Bacci_Controllers\Bacci_UsersController;

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

Route::get('/', [Bacci_MainController::class, 'indexcontrol']);

Route::get('/articles', [Bacci_MainController::class, 'articlescontrol']);

Route::get('/news', [Bacci_MainController::class, 'newscontrol']);

Route::get('/blog', [Bacci_MainController::class, 'blogcontrol']);

Route::get('/aboutus', [Bacci_MainController::class, 'aboutcontrol']);

Route::get('/sitemap', [Bacci_MainController::class, 'sitemapcontrol']);

Route::get('/register', [Bacci_UsersController::class, 'create']);

// Route::resource('/register', 'Bacci_UsersController');





// Route::get('/register', function(){
//     return view('/bacci_register');
// });

// Route::get('/signup', function(){
//     return view ('/layouts/bacci_signup');   
// });

// Route::get('/', [Bacci_MainController::class, 'all']);

/*
Route::get('/', funtion()[

    return view('posts', [
        'posts' => PostsController::class, 'posting'
    ]);
    
]);
*/

// Route::get('/posts/{slug}', [Bacci_MainController::class, 'posting'])->where('post', '[A-z_\-]+');}', [Bacci_MainController::class, 'posting'])->where('post', '[A-z_\-]+');