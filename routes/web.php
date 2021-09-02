<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::prefix('auth')->group(function () {
    Route::get('/login', 'auth\LoginController@index')->name('login');
    Route::get('/register', 'auth\RegisterController@index')->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'cms\DashboardController@index')->name('Dashboard');
});

