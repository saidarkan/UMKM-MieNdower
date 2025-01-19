<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Review;
use App\Models\Promo;
use App\Models\Activity;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil jumlah rating untuk setiap kategori bintang (1 hingga 5)
        $ratingsCount = Review::selectRaw('count(*) as count, rating')
            ->groupBy('rating')
            ->pluck('count', 'rating')
            ->toArray();

        // Memastikan setiap rating (1 hingga 5) ada di dalam array meskipun tanpa data
        $ratingsData = [
            1 => $ratingsCount[1] ?? 0,
            2 => $ratingsCount[2] ?? 0,
            3 => $ratingsCount[3] ?? 0,
            4 => $ratingsCount[4] ?? 0,
            5 => $ratingsCount[5] ?? 0,
        ];

        return view('dashboard', [
            'totalMenu' => Menu::count(),
            'totalReview' => Review::count(),
            'totalPromo' => Promo::count(),
            'userName' => Auth::user()->name,
            'ratingsData' => $ratingsData, // Menambahkan data rating ke view
        ]);
    }
}
