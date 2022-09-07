<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('acceuil', function () {
    return view('acceuil');
});

Route::get('clients', function () {
    return view('clients');
});

Route::get('master', function () {
    return view('master');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('authen', function () {
    return view('authen');
});

Route::get('auth', [AuthController::class, "index"])->name("auth");

Route::get('pricings', function () {
    return view('pricings');
});

Route::get('reglage', function () {
    return view('reglage');
});

Route::get('reset', function () {
    return view('reset');
});


Route::resource('bus', function () {
    return view('reset');
});

Route::resource("bus", PostController::class);

Route::resource("chaise", PostController::class);

Route::resource("destination", PostController::class);

Route::resource("ticket", PostController::class);   