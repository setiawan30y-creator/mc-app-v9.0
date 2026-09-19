<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.index')->name('dashboard');
Route::view('/dashboard', 'dashboard.index')->name('dashboard');
Route::view('/settings/appearance', 'settings.appearance')->name('appearance');
