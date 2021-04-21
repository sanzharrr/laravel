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
Route::get('locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')->name('locale');
Route::middleware(['set_locale'])->group(function (){
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/home', function () {
        return view('index');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/services', function () {
        return view('services');
    });
    Route::get('/appointment', function () {
        return view('appointment');
    });
});

Route::get('/multiuploads', 'App\Http\Controllers\UploadController@uploadForm');
Route::post('/multiuploads', 'App\Http\Controllers\UploadController@uploadSubmit');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');
 
 Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'showForm']);

Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeForm'])->name('contact.save');