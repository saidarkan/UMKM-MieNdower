<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data promo dari database
        $promo = Promo::all();

        // Return ke view dengan data promo
        return view('promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return view untuk form create
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_promo' => 'required|string|max:255',
            'deskripsi_promo' => 'required|string',
            'gambar_promo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal_promo' => 'required|date',
        ]);

        // Upload gambar promo
        $imagePath = $request->file('gambar_promo')->store('promo', 'public');

        // Simpan data promo
        Promo::create([
            'nama_promo' => $validated['nama_promo'],
            'deskripsi_promo' => $validated['deskripsi_promo'],
            'gambar_promo' => $imagePath,
            'tanggal_promo' => $validated['tanggal_promo'],
        ]);

        // Redirect ke halaman daftar promo
        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        // Tampilkan detail promo
        return view('promo.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        // Return view untuk edit promo
        return view('promo.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_promo' => 'required|string|max:255',
            'deskripsi_promo' => 'required|string',
            'gambar_promo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal_promo' => 'required|date',
        ]);

        // Jika ada gambar baru, upload dan ganti gambar lama
        if ($request->hasFile('gambar_promo')) {
            $imagePath = $request->file('gambar_promo')->store('promo', 'public');
            $promo->gambar_promo = $imagePath;
        }

        // Update data promo
        $promo->update([
            'nama_promo' => $validated['nama_promo'],
            'deskripsi_promo' => $validated['deskripsi_promo'],
            'gambar_promo' => $promo->gambar_promo, // Gambar tidak diubah jika tidak ada upload baru
            'tanggal_promo' => $validated['tanggal_promo'],
        ]);

        // Redirect ke halaman daftar promo
        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        // Hapus data promo
        $promo->delete();

        // Redirect ke halaman daftar promo
        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus!');
    }
}
