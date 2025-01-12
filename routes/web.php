<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;

use App\Models\Menu;
=======
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

>>>>>>> origin/Ridho

Route::get('/', function () {
    $menus = Menu::all(); // Mengambil semua data menu dari database
    return view('welcome', compact('menus')); // Mengirim data menus ke view
});

<<<<<<< HEAD

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
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
>>>>>>> origin/Ridho

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
Route::middleware(['auth'])->group(function () {
    Route::resource('qna', QnaController::class);
});

>>>>>>> origin/Ridho1
Route::resource('promo', PromoController::class);
>>>>>>> origin/Ridho

require __DIR__.'/auth.php';
