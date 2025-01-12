<?php
use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;



Route::get('/', function () {
    $menus = Menu::all(); // Mengambil semua data menu dari database
    return view('welcome', compact('menus')); // Mengirim data menus ke view
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
