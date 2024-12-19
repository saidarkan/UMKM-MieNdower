<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\HomepageController;

// Route Homepage
Route::resource('homepage', HomepageController::class);

// Contoh tambahan untuk halaman utama
Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage.index');

Route::resource('qna', QnaController::class);

Route::get('/qna', [QnaController::class, 'index'])->name('qna.index');

Route::get('/promo', function () {
    return view('promo');
});

Route::resource('promo', PromoController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('qna', QnaController::class);
});

Route::resource('promo', PromoController::class);

require __DIR__.'/auth.php';
