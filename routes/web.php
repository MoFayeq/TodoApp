<?php

use App\Http\Controllers\AuthController;
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
    return view('login');
});
Route::view('/welcome', 'Welcome Page')->name('home');
Route::resource('posts',POSTController::class);
Route::get('/posts/restore/{id}',[PostController::class,'restore'])->name('restore'); 
Route::delete('/posts/forcedelete/{id}',[PostController::class,'forcedelete'])->name('forcedelete'); 

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/signup',[AuthController::class,'signup'])->name('signup');

Route::get('/signing',function(){
    return view('signup');
})->name('signing');