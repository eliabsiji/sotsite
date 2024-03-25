<?php

use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GivingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SermonsController;
use App\Http\Controllers\ServicesController;


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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/aboutus',[AboutController::class, 'index'])->name('aboutus');
Route::get('/services',[ServicesController::class, 'index'])->name('services');
Route::get('/ministers',[AboutController::class, 'ministers'])->name('ministers');
Route::get('/programs',[ProgramController::class, 'index'])->name('programs');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/sermons',[SermonsController::class, 'index'])->name('sermons');
Route::get('/gallery',[GalleryController::class, 'index'])->name('gallery');
Route::get('/giving',[GivingController::class, 'index'])->name('giving');
