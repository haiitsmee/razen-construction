<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/layanan/{slug}', [ServiceController::class, 'show'])->name('services.detail');

Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.detail');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');