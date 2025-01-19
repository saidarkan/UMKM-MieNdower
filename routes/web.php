<?php
use App\Models\Faq;
use App\Models\Menu;
use App\Models\About;
use App\Models\Promo;
use App\Models\Review;
use App\Models\Artikel;
use App\Models\Homepage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;  // Controller untuk FAQ

// Rute untuk halaman depan
Route::get('/', function () {
   // Mengambil semua data menu dari database
   $promo = Promo::where('jenis_promo', 'berlangsung')->get();
    $faqs = Faq::all();
    $menus = Menu::all();
    $artikel = Artikel::all();
    $homepage = Homepage::all();
    $about = About::all();
    return view('welcome', compact('menus','promo','faqs','artikel','homepage','about')); // Mengirim data menus dan promo ke view
});

// Rute untuk Artikel
Route::resource('artikel', ArtikelController::class);
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// Rute untuk About
Route::resource('about', AboutController::class);
Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');


// Rute untuk Homepage
Route::resource('homepage', HomepageController::class);

Route::resource('homepages', HomepageController::class);

// Rute untuk Menu
Route::resource('menus', MenuController::class);
Route::resource('menu', MenuController::class);
Route::post('/menu/{id}/review', [MenuController::class, 'storeReview'])->name('menu.storeReview');


// Rute untuk Menu
Route::resource('location', LocationController::class);
Route::resource('locations', LocationController::class);
Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
Route::get('/locations/edit', [LocationController::class, 'edit'])->name('locations.edit');
Route::delete('/locations/{id}', [LocationController::class, 'destroy'])->name('locations.destroy');


// Rute untuk Menu
Route::resource('contact', ContactController::class);
Route::resource('contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/edit', [ContactController::class, 'edit'])->name('contacts.edit');

//Review
Route::resource('review', ReviewController::class);
Route::resource('reviews', ReviewController::class);

// Route::get('/dashboard', function () {
//     // Mengambil semua data menu dari database
//      $totalPromo = Promo::count();
//      $totalMenu = Menu::count();
//      $totalReview = Review::count();

//      return view('dashboard', compact('totalMenu','totalPromo','totalReview')); // Mengirim data menus dan promo ke view
//  });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// Rute untuk Promo
Route::resource('promo', PromoController::class);
Route::get('/promo', [PromoController::class, 'index'])->name('promo.index');
Route::get('/promo/{id}', [PromoController::class, 'show'])->name('promo.show');

// Rute untuk FAQ (Tambahkan jika Anda memiliki FAQController)
Route::resource('qna', QnaController::class);  // Controller untuk FAQ
Route::get('/qna', [QnaController::class, 'index'])->name('qna.index');
Route::get('/qna/{id}', [QnaController::class, 'show'])->name('qna.show');

Route::resource('faq', FaqController::class);



// Rute untuk Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute autentikasi
require __DIR__.'/auth.php';
