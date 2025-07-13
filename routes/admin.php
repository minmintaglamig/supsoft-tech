<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/portfolio', [AdminController::class, 'portfolio'])->name('portfolio');
        Route::get('/team_members', [AdminController::class, 'teammembers'])->name('team_members');
        Route::get('/show_team_members/{id}', [AdminController::class, 'show'])->name('show');
        Route::post('/update_team_members/{id}', [AdminController::class, 'update'])->name('update');
        Route::post('/delete_team_members/{id}', [AdminController::class, 'delete'])->name('delete');
        Route::post('/hide_team_members/{id}', [AdminController::class, 'hide'])->name('hide');
    });
});
