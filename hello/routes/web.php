<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/', [BlogController::class, 'index']);
Route::get('/home', [BlogController::class, 'index']);

Route::get('/testi', [PageController::class, 'home']);



Route::get('/blog/create', [BlogController::class, 'create'])->middleware('auth');
 

Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/blog/{id}/edit', [BlogController::class, 'edit']);
Route::post('/blog/save', [BlogController::class, 'save']);
Route::post('/blog/{id}', [BlogController::class, 'update']);


Route::post('/comments', [CommentController::class, 'save'])->middleware('auth');


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'save']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/login', [LoginController::class, 'loginView'])
->middleware('guest')
->name('login');


Route::post('/login', [LoginController::class, 'login']);

 