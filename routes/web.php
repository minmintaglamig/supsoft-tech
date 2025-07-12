<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LinkedInController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

Route::get('/login/linkedin', [LinkedInController::class, 'redirect'])->name('auth.linkedin');
Route::get('/login/linkedin/callback', [LinkedInController::class, 'callback']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    // You can add validation, mail, or DB logic here
    return back()->with('success', 'Your message has been sent!');
})->name('contact.submit');

Route::middleware([])->group(function () {

    Route::prefix('portfolio')->name('portfolio.')->group(function () {
         Route::post('/add', [ProfileController::class, 'store'])->name('store');
        Route::get('/create', [ProfileController::class, 'create'])->name('create');
    });
});
Route::get('/api/portfolio-images/{category?}', [ProfileController::class, 'getImages']);

