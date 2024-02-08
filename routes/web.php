<?php

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Bacaan\BacaanController;
use App\Http\Controllers\Profile\ProfileController;

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
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});

if(env('APP_ENV') == 'production'){
    URL::forceScheme('https');
}

// Route::get('/login', [AuthController::class,'main'])->name('login');

Route::get('/', [BacaanController::class,'main'])->name('beranda');
Route::get('/bacaan', [BacaanController::class,'cariContent'])->name('bacaan');
Route::get('/baca/{slug}',[BacaanController::class,'detail'])->name('detail');

Route::get('/profile/',[ProfileController::class,'main'])->name('profileGuest');
Route::get('/auth/',[AuthController::class,'auth'])->name('login');
Route::get('/profile/{users:username}',[ProfileController::class,'main'])->name('profileUser');
