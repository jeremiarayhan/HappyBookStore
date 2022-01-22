<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Category;

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

Route::get('/', [PageController::class, 'viewHome'])->name('home');
Route::get('/fiction', [PageController::class, 'viewFiction'])->name('fiction');
Route::get('/science', [PageController::class, 'viewScience'])->name('science');
Route::get('/computer', [PageController::class, 'viewComputer'])->name('computer');
Route::get('/detail', [PageController::class, 'viewBookDetail'])->name('detail');

Route::get('/about', function(){
    return view ('pages.about');
})->name('about');
