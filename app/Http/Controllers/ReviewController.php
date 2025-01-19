<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Fungsi untuk menampilkan daftar review
    public function index()
    {
        // Mengambil semua review beserta relasi menu
        $reviews = Review::with('menu')->paginate(6); // Mengambil 6 review per halaman
        return view('reviews.index', compact('reviews')); // Pastikan nama file views-nya sesuai
    }

    // Fungsi untuk menampilkan form tambah review
    public function create()
    {
        // Mengambil semua menu untuk ditampilkan di form
        $menus = Menu::all();
        return view('reviews.create', compact('menus')); // Mengirimkan data menus ke view
    }

    // Fungsi untuk menyimpan review baru
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:500',
            'menu_id' => 'required|exists:menus,id',
            'nama' => 'required|string|max:100'
        ]);

        // Menyimpan review baru ke database
        Review::create([
            'rating' => $request->rating,
            'comment' => $request->comment,
            'menu_id' => $request->menu_id,
            'nama' => $request->nama,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review berhasil ditambahkan!');
    }

    // Fungsi untuk menampilkan form edit review
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $menus = Menu::all();
        return view('reviews.edit', compact('review', 'menus'));
    }

    // Fungsi untuk mengupdate review
    public function update(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:500',
            'menu_id' => 'required|exists:menus,id',
            'nama' => 'required|string|max:100'
        ]);

        $review = Review::findOrFail($id);
        $review->update([
            'rating' => $request->rating,
            'comment' => $request->comment,
            'menu_id' => $request->menu_id,
            'nama' => $request->nama,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review berhasil diperbarui!');
    }

    // Fungsi untuk menghapus review
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            // Jika sudah login, arahkan ke halaman reviews.index
            return redirect()->route('reviews.index')->with('success', 'Review berhasil dihapus!');
        } else {
            // Jika belum login, arahkan ke halaman menu.show
            return redirect()->route('menu.show', $review->menu_id)->with('success', 'Review berhasil dihapus!');
        }
    }

}
