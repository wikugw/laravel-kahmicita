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

Route::get('/', '\App\Http\Controllers\Frontend\HomeController@index')->name('frontend.home');

Route::get('/akta', function () {
    return view('frontend.akta.index');
})->name('frontend.akta');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('backend.activity.list.index');
    })->name('dashboard');
    Route::resource('activity', '\App\Http\Controllers\Backend\ActivityController');
});

require __DIR__.'/auth.php';
