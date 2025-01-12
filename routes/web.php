<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;

use App\Models\Menu;

Route::get('/', function () {
    $menus = Menu::all(); // Mengambil semua data menu dari database
    return view('welcome', compact('menus')); // Mengirim data menus ke view
});


Route::resource('menus', MenuController::class);

Route::resource('contacts', ContactController::class);

Route::resource('locations', LocationController::class);

Route::get('/menus/{id}', [MenuController::class, 'show'])->name('menus.show');
Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menus.update');


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/faq', function () {
    return view('faq.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
