<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function index()
    {
        $promo = Promo::paginate(10);
        return view('promo.index', compact('promo'));
    }



    public function create()
    {
        // Return view untuk form create
        return view('promo.create');
    }


    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_promo' => 'required|string|max:255',
            'deskripsi_promo' => 'required|string',
            'gambar_promo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal_promo' => 'required|date',
        ]);

        $imagePath = $request->file('gambar_promo')->store('promo', 'public');

        Promo::create([
            'nama_promo' => $validated['nama_promo'],
            'deskripsi_promo' => $validated['deskripsi_promo'],
            'gambar_promo' => $imagePath,
            'tanggal_promo' => $validated['tanggal_promo'],
        ]);

        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan!');
    }

    public function show(Promo $promo)
    {
        return view('promo.show', compact('promo'));
    }


    public function edit(Promo $promo)
    {
        // Return view untuk edit promo
        return view('promo.edit', compact('promo'));
    }


    public function update(Request $request, Promo $promo)
    {
        $validated = $request->validate([
            'nama_promo' => 'required|string|max:255',
            'deskripsi_promo' => 'required|string',
            'gambar_promo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal_promo' => 'required|date',
        ]);
 
        if ($request->hasFile('gambar_promo')) {
            $imagePath = $request->file('gambar_promo')->store('promo', 'public');
            $promo->gambar_promo = $imagePath;
        }

        $promo->update([
            'nama_promo' => $validated['nama_promo'],
            'deskripsi_promo' => $validated['deskripsi_promo'],
            'gambar_promo' => $promo->gambar_promo, // Gambar tidak diubah jika tidak ada upload baru
            'tanggal_promo' => $validated['tanggal_promo'],
        ]);

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui!');
    }

    public function destroy(Promo $promo)
    {
        $promo->delete();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus!');
    }
}
