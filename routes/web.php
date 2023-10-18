<?php

use Illuminate\Support\Facades\Config;
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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('lang/{locale}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.locales'))) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }
    return redirect()->back();
});
Route::get('/faq', [\App\Http\Controllers\FAQController::class, 'index'])->name('faq');
Route::get('/tours', [\App\Http\Controllers\TourController::class, 'index'])->name('tour');
Route::get('/contact', [\App\Http\Controllers\ContactFormController::class, 'index'])->name('contact');
Route::post('/request-contact', [\App\Http\Controllers\ContactFormController::class, 'requestForm'])->name('request-form');
Route::post('/email-contact', [\App\Http\Controllers\ContactFormController::class, 'sendEmailForm'])->name('send-email-form');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
