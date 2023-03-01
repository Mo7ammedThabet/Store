<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])
->name('dashboard');

Route::resource('dashboard/categories', CategoriesController::class);
