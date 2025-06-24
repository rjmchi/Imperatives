<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerbController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth'])
    ->group(function(){
        Route::get('dashboard', function (){
            return Inertia::render('Dashboard');
        })->name('dashboard');
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::post('/verb', [VerbController::class, 'store'])->name('verb.store');
    });

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
