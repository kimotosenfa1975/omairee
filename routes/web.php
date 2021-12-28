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

Route::get('/', [App\Http\Controllers\Pub\TopController::class, 'index'])->name('top');
Route::get('/jisha', [App\Http\Controllers\Pub\CompanyController::class, 'index'])->name('pub.jisha');
Route::get('/jisha-detail', [App\Http\Controllers\Pub\CompanyController::class, 'detail'])->name('pub.jisha-detail');
Route::get('/contact', [App\Http\Controllers\Pub\ContactController::class, 'index'])->name('pub.contact');
Route::post('/contact', [App\Http\Controllers\Pub\ContactController::class, 'send'])->name('contact.send');
Route::get('/privacy', function () {
    return view('public.privacy');
})->name('privacy');
Route::get('/terms', function () {
    return view('public.terms');
})->name('terms');
Route::get('/transaction', function () {
    return view('public.transaction-raw');
})->name('transaction');

Route::name('mypage.')->middleware(['auth'])->group(function () {
    Route::get('/mypage', function () {
        // Route assigned name "admin.users"...
        return view('mypage.mypage');
    })->name('mypage');
    Route::get('/omikuji', [App\Http\Controllers\Pub\OmikujiController::class, 'index'])->name('omikuji');
    Route::get('/ema', [App\Http\Controllers\Pub\EmaController::class, 'index'])->name('ema');
    Route::get('/ema-after', [App\Http\Controllers\Pub\EmaController::class, 'after'])->name('ema-after');
    Route::get('/ema-list', [App\Http\Controllers\Pub\EmaController::class, 'list'])->name('ema-list');
    Route::get('/jisha-mypage', [App\Http\Controllers\Mypage\JishaController::class, 'index'])->name('jisha-mypage');
    Route::get('/public-request', [App\Http\Controllers\Mypage\RequestController::class, 'index'])->name('public-request');
    Route::get('/payment', [App\Http\Controllers\Mypage\PaymentController::class, 'index'])->name('payment');
});

require __DIR__.'/auth.php';
