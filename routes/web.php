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

Route::middleware(['auth', 'isTeacher'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});



Route::get('/login', function () {
    return redirect('/amoclient/redirect');
})->name('login');

Route::get('/amoclient/ready', function () {
    return redirect('/');
});
