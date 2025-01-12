<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua menu
        $menus = Menu::all();

        // Kirim data ke view welcome
        return view('menu.index', compact('menus'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan ke form untuk menambah menu
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'jenis_menu' => 'required|string|max:255',
            'deskripsi_menu' => 'required|string|max:255',
            'harga_menu' => 'required|numeric',
            'gambar_menu' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi gambar
        ]);

        // Simpan gambar ke folder public/storage
        $path = $request->file('gambar_menu')->store('menu_images', 'public');

        // Simpan data menu ke database
        Menu::create([
            'nama_menu' => $validated['nama_menu'],
            'jenis_menu' => $validated['jenis_menu'],
            'deskripsi_menu' => $validated['deskripsi_menu'],
            'harga_menu' => $validated['harga_menu'],
            'gambar_menu' => $path,
        ]);

        // Redirect ke halaman index dan memberi pesan sukses
        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    // MenuController.php
public function show($id)
{
    // Ambil menu berdasarkan ID
    $menu = Menu::findOrFail($id);

    // Kembalikan data dalam format JSON
    return response()->json($menu);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        // Form untuk mengedit menu
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the data
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga_menu' => 'required|numeric',
            'gambar_menu' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the menu item by its ID
        $menu = Menu::findOrFail($id);

        // Update the menu data
        $menu->nama_menu = $request->nama_menu;
        $menu->harga_menu = $request->harga_menu;

        // Handle the image upload
        if ($request->hasFile('gambar_menu')) {
            $imageName = time() . '.' . $request->gambar_menu->extension();
            $request->gambar_menu->move(public_path('storage'), $imageName);
            $menu->gambar_menu = $imageName;
        }

        // Save the updated menu
        $menu->save();

        // Redirect or show success message
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // Hapus gambar menu jika ada
        if ($menu->gambar_menu && Storage::exists('public/' . $menu->gambar_menu)) {
            Storage::delete('public/' . $menu->gambar_menu);
        }

        // Hapus data menu dari database
        $menu->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus.');
    }
}
