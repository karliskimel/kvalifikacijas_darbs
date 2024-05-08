<?php
 use App\Http\Controllers\TractorController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


Route::match(['get', 'post'], '/search', [TractorController::class, 'search'])->name('tractor.search');


Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop.index');

Route::get('/#', [TractorController::class, 'welcome'])->name('welcome');


