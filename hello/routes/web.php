<?php

use App\Http\Controllers\BlogController;
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





Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', [BlogController::class, 'index']);


Route::get('/blog/{id}', [BlogController::class, 'show']);


// Route::get('/blog', function () {

//     $title = 'this title';
//     $text = "this is blig text";

//     return view('blog', compact('title', 'text'));

//     // return view('blog', ['title' => $title, 'text' => $text]);
// });

