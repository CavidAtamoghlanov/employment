<?php

use App\Http\Controllers\DbController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
    








Route::get('about', function () {
    
    return view('about');
})->name("about");


Route::get('contact', function () {
    return view('contact');
})->name("contact");



Route::get('/{slug?}', [DbController::class,'index'])->name('index');
