<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PsychologistController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Livewire\Mechanisms\FrontendAssets\FrontendAssets;

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
Auth::routes();
//Languages
Route::get('/set_language/{lang}','Controller@set_language')->name('set_language');

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about.index');
Route::get('/alphabet', [FrontendController::class, 'alphabet'])->name('alphabet.index');
Route::get('/words', [FrontendController::class, 'word'])->name('word.index');

