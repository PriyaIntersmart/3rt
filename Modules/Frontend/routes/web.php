<?php

use Illuminate\Support\Facades\Route;
use Modules\Frontend\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class,'index'])->name('index');

Route::get('/terms-and-condition', [FrontendController::class,'terms'])->name('terms-and-condition');



Route::get('/about-us', [FrontendController::class,'about'])->name('about');

Route::get('/contact-us',[FrontendController::class,'contact'])->name('contact');

Route::get('/structure-overview',[FrontendController::class,'structure'])->name('structure.overview');


Route::get('/news-event',[FrontendController::class,'news'])->name('newsandevents');

 Route::get('news-events-details/{slug}',[FrontendController::class,'newsdetails'])->name('news-events-details');



