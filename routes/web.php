<?php

use App\Http\Controllers\CleanBlogController;
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

 Route::prefix('/cleanBlog')->name('cleanBlog.')->group(function(){
    Route::get('/index',[CleanBlogController::class ,'index' ])->name('index');
    Route::get('/about',[CleanBlogController::class ,'about' ])->name('about');
    Route::get('/contact',[CleanBlogController::class ,'contact' ])->name('contact');
    Route::post('/contact',[CleanBlogController::class ,'sendContact' ])->name('sendContact');
    Route::get('/sample/{id}',[CleanBlogController::class ,'sample' ])->name('sample');
});
