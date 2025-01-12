<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $request->validate([
        'tanggal' => 'required|date',
        'judul' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'artikel' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ],[
        'judul.required' => 'Judul harus diisi.',
        'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
        'kategori.required' => 'kategori harus diisi.',
        'kategori.max' => 'kategori tidak boleh lebih dari 255 karakter.',
        'status.required' => 'status harus diisi.',
        'status.max' => 'status tidak boleh lebih dari 255 karakter.',
        'artikel.required' => 'artikel harus diisi.',
        'artikel.max' => 'artikel tidak boleh lebih dari 255 karakter.',
        'gambar.image' => 'Gambar harus dalam format gambar.',
        'gambar.mimes' => 'Gambar harus dalam format: jpg, jpeg, png.',
        'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 3MB.',
    ]);
        $artikel = new Artikel();
        $artikel->tanggal = $request->tanggal;
        $artikel->judul = $request->judul;
        $artikel->kategori = $request->kategori;
        $artikel->status = $request->status;
        $artikel->artikel= $request->artikel;

        if ($request->hasFile('gambar')) {
            $artikel->gambar = $request->file('gambar')->store('images', 'public');
        }
        $artikel->save();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        $artikel=$artikel;
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $artikel = $artikel;
        $request->validate([
        'tanggal' => 'required|date',
        'judul' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'artikel' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $artikel->tanggal = $request->tanggal;
        $artikel->judul_= $request->judul;
        $artikel->kategori = $request->kategori;
        $artikel->status = $request->status;
        $artikel->artikel = $request->artikel;

        if ($request->hasFile('gambar')) {
            if ($artikel->gambar) {
                Storage::delete('public/' . $artikel->gambar);
            }
            $artikel->gambar = $request->file('gambar')->store('gambar', 'public');
        }
        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        $artikel = $artikel;
        if ($artikel->gambar) {
            Storage::delete('public/' . $artikel->gambar);
        }
        $artikel->delete();
        return redirect()->route('artikel.index')->with('error', 'Artikel berhasil dihapus!');
    }
}
