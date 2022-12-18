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

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', function () {
    return view('pages.index');
})->name('home');
Route::get('/from-body', function () {
    return view('pages.manual');
});
Route::get('/model-binding', function () {
    return view('pages.model-binding');
});
Route::get('/model-binding-parameters', function () {
    return view('pages.model-binding-parameters');
});
