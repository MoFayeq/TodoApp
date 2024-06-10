<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome Page');
});
Route::view('/welcome', 'Welcome Page')->name('home');
Route::resource('posts',POSTController::class);
Route::get('/posts/restore/{id}',[PostController::class,'restore'])->name('restore'); 
Route::delete('/posts/forcedelete/{id}',[PostController::class,'forcedelete'])->name('forcedelete'); 
//Route::get('/create', [WelcomeController::class,'make'])->name('create');

//Route::post('/show', [WelcomeController::class,'show'])->name('show');


