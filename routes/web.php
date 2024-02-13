<?php
// use App\Http\Controllers\TractorController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
    return view('welcome');
})->name('home');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/search', [TractorController::class, 'search'])->name('tractor');
// Route::post('/tractor', [TractorController::class, 'tractor'])->name('tractor');

Route::post('/tractors', 'TractorController@index');
Route::post('/search', 'TractorController@search')->name('tractor.search');

// Route::group(['middleware' => 'auth'], function (){
//     Route::get('/profile', function (){
//        return "Hi";
//     });
// });