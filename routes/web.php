<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PageController as AdminPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/admin')->middleware(['can:use admin panel'])->group(function() {
    Route::middleware(['can:view pages'])->get('/home', function () {
        return view('home');
    })->name('home');
    Route::middleware(['can:view pages'])->get('/pages', [AdminPageController::class, 'list']);
    Route::middleware(['can:update pages'])->get('/page', [AdminPageController::class, 'form']);
    Route::middleware(['can:update pages'])->post('/page', [AdminPageController::class, 'save']);
    Route::middleware(['can:delete pages'])->get('/delete_page', [AdminPageController::class, 'delete']);
});

Route::get('/{slug}', PageController::class);
