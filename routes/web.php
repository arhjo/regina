<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/', [App\Http\Controllers\LeadController::class, 'landing'])->name('landing');
Route::get('/lotes', [App\Http\Controllers\LotesController::class, 'lotes'])->name('lotes');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/leads', [App\Http\Controllers\LeadController::class, 'store'])->name('leads');
Route::post('/contactanos', [App\Http\Controllers\LeadController::class, 'leadtel'])->name('leadtel');