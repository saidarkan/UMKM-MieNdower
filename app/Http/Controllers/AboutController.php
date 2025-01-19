<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        $data = $request->all();

        // Proses upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('about_images', 'public');
        }

        About::create($data);

        return redirect()->route('about.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(About $about)
    {
        return view('about.show', compact('about'));
    }

    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        $data = $request->all();

        // Proses upload gambar jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($about->gambar && Storage::disk('public')->exists($about->gambar)) {
                Storage::disk('public')->delete($about->gambar);
            }
            // Simpan gambar baru
            $data['gambar'] = $request->file('gambar')->store('about_images', 'public');
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(About $about)
    {
        // Hapus gambar dari penyimpanan jika ada
        if ($about->gambar && Storage::disk('public')->exists($about->gambar)) {
            Storage::disk('public')->delete($about->gambar);
        }

        $about->delete();

        return redirect()->route('about.index')->with('success', 'Data berhasil dihapus');
    }
}
