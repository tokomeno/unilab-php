<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController; 

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
 
 

Route::get('/about', [PageController::class, 'about']);


Route::get('/contact', [ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'save']);





Route::get('/home', function(){
    return view('index');
});


Route::get('/testi', [PageController::class, 'home']);



Route::get('/', function () {

    // Blog::create();
    // $blog = new Blog();
    // $blog->title = 'this new recorc';
    // $blog->text = "this is new text for blog";
    // $blog->save();

    // Blog::create([
    //     'title' => 'record two',
    //     'text' => 'text record two',
    // ]);

    return view('home');
});




Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/create', [BlogController::class, 'create']);
 
Route::get('/blog/{id}', [BlogController::class, 'show']);





Route::get('/blog/{id}/edit', [BlogController::class, 'edit']);

Route::post('/blog/save', [BlogController::class, 'save']);

Route::post('/blog/{id}', [BlogController::class, 'update']);




Route::post('/comments', [CommentController::class, 'save']);



// Route::get('/blog', function () {

//     $title = 'this title';
//     $text = "this is blig text";

//     return view('blog', compact('title', 'text'));

//     // return view('blog', ['title' => $title, 'text' => $text]);
// });

