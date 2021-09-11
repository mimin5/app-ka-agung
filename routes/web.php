<?php

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::prefix('auth')->group(function () {
    Route::get('/login', 'auth\LoginController@index')->name('login');
    Route::get('/register', 'auth\RegisterController@index')->name('register');
    Route::post('/insert', 'auth\RegisterController@insert')->name('register.insert');
    Route::post('/dashauth','auth\LoginController@login')->name('authlogin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'cms\DashboardController@index')->name('Dashboard');
});

Route::get('/Logout','auth\LoginController@logout')->name('logout');
