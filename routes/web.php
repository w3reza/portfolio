<?php

use App\Http\Controllers\protfolioController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.pages.home');
});

Route::get('/home',[protfolioController::class,'index'])->name('home');
Route::get('/about',[protfolioController::class,'about'])->name('about.me');
Route::get('/projects',[protfolioController::class,'projects'])->name('projects');
Route::get('/contact',[protfolioController::class,'contact'])->name('contact');
