<?php

namespace App\Http\Controllers;
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

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'add'])->name('contact.add');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::group(['middleware' => ['guest']], function()
    {

        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.register');

        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.login');
        
    });

    Route::group(['middleware' => ['auth']], function()
    {

        Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

    });


});