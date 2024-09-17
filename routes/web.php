<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('site.index');

Route::get('/redirect', [App\Http\Controllers\IndexController::class, 'redirect'])->name('site.redirect');

Route::get('/register', [App\Http\Controllers\AccountController::class, 'register'])->name('site.register');
Route::post('/register', [App\Http\Controllers\AccountController::class, 'register'])->name('site.register');

Route::get('/recover', [App\Http\Controllers\AccountController::class, 'recover'])->name('site.recover');
Route::post('/recover', [App\Http\Controllers\AccountController::class, 'recover'])->name('site.recover');

Route::get('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('site.login');
Route::post('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('site.login');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('site.logout');

Route::get('/contact', [App\Http\Controllers\AccountController::class, 'contact'])->name('site.contact');
Route::post('/contact', [App\Http\Controllers\AccountController::class, 'contact'])->name('site.contact');

Route::get('/fallback', [App\Http\Controllers\AccountController::class, 'fallback'])->name('site.fallback');

Route::prefix('app')->group(function(){
    Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate'])->name('app.generate');
    Route::get('/remove', [App\Http\Controllers\LinkController::class, 'remove'])->name('app.remove');
    Route::get('/list', [App\Http\Controllers\LinkController::class, 'list'])->name('app.list');
});

Route::fallback(function() {
    return redirect()->route('site.fallback');
});

// Route::get(
//     'teste/{p1}/{p2}',
//     [App\Http\Controllers\TesteController::class, 'teste']
// );