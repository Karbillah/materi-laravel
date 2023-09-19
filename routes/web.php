<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CastController;

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

//Route::get('/index', function () { 
//    return view('index');
//})->name('index');

//Route::get('/form', function () {
//    return view('form');
//})->name('form');

//Route::get('/welcome1', function () {
//    return view('welcome1');
//})->name('welcome1');

Route::get('/index', [PagesController::class, 'index'])->name('index');
Route::get('/form', [PagesController::class, 'form'])->name('form');
Route::get('/welcome1', [PagesController::class, 'welcome1'])->name('welcome1');

Route::get('/master', function () {
    return view('template.master');
});

Route::resource('/cast', CastController::class);