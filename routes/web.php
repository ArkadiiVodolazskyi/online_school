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

Route::prefix('/admin')->group(function() {
    Route::get('/pages', [AdminPageController::class, 'list']);
    Route::get('/page', [AdminPageController::class, 'form']);
    Route::post('/page', [AdminPageController::class, 'save']);
    Route::get('/delete_page', [AdminPageController::class, 'delete']);
});

Route::get('/{slug}', PageController::class);
