<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        // Ambil data homepage dengan paginasi
        $homepage = Homepage::paginate(10);
        return view('homepage.index', compact('homepage'));
    }

    public function create()
    {
        // Return view untuk form create
        return view('homepage.create');
    }

    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi_judul' => 'required|string',
        'subjudul' => 'nullable|string|max:255',
        'deskripsi_subjudul' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Sanitasi deskripsi untuk menghapus tag HTML
    $validated['deskripsi_judul'] = strip_tags($validated['deskripsi_judul']);
    $validated['deskripsi_subjudul'] = strip_tags($validated['deskripsi_subjudul']);

    // Simpan gambar jika ada
    $imagePath = $request->hasFile('gambar') ? $request->file('gambar')->store('homepage', 'public') : null;

    // Simpan data homepage ke database
    Homepage::create([
        'judul' => $validated['judul'],
        'deskripsi_judul' => $validated['deskripsi_judul'],
        'subjudul' => $validated['subjudul'],
        'deskripsi_subjudul' => $validated['deskripsi_subjudul'],
        'gambar' => $imagePath,
    ]);

    return redirect()->route('homepage.index')->with('success', 'Homepage berhasil ditambahkan!');
}
    public function edit(Homepage $homepage)
    {
        // Return view untuk edit homepage
        return view('homepage.edit', compact('homepage'));
    }

    public function update(Request $request, Homepage $homepage)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_judul' => 'required|string',
            'subjudul' => 'nullable|string|max:255',
            'deskripsi_subjudul' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Sanitasi deskripsi untuk menghapus tag HTML
        $validated['deskripsi_judul'] = strip_tags($validated['deskripsi_judul']);
        $validated['deskripsi_subjudul'] = strip_tags($validated['deskripsi_subjudul']);

        // Update gambar jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('homepage', 'public');
            $homepage->gambar = $imagePath;
        }

        // Update data homepage
        $homepage->update([
            'judul' => $validated['judul'],
            'deskripsi_judul' => $validated['deskripsi_judul'],
            'subjudul' => $validated['subjudul'],
            'deskripsi_subjudul' => $validated['deskripsi_subjudul'],
            'gambar' => $homepage->gambar, // Tetap gunakan gambar lama jika tidak ada yang baru
        ]);

        return redirect()->route('homepage.index')->with('success', 'Homepage berhasil diperbarui!');
    }

    public function destroy(Homepage $homepage)
    {
        $homepage->delete();

        return redirect()->route('homepage.index')->with('success', 'Homepage berhasil dihapus!');
    }
}
