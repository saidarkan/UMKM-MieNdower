<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the FAQ resource.
     */
    public function index()
    {
        // Mengambil semua data FAQ dan menampilkannya ke view
        $faqs = Faq::all();
        return view('faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new FAQ.
     */
    public function create()
    {
        // Menampilkan form untuk menambahkan FAQ baru
        return view('faq.create');
    }

    /**
     * Store a newly created FAQ in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);

        // Membuat FAQ baru
        Faq::create([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
        ]);

        // Redirect ke halaman daftar FAQ setelah menyimpan data
        return redirect()->route('faq.index')->with('success', 'FAQ berhasil ditambahkan!');
    }

    /**
     * Display the specified FAQ.
     */
    public function show(Faq $faq)
    {
        // Menampilkan detail FAQ (jika diperlukan)
        return view('faq.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified FAQ.
     */
    public function edit(Faq $faq)
    {
        // Menampilkan form untuk mengedit FAQ
        return view('faq.edit', compact('faq'));
    }

    /**
     * Update the specified FAQ in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        // Validasi input
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);

        // Update FAQ
        $faq->update([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
        ]);

        // Redirect setelah update berhasil
        return redirect()->route('faq.index')->with('success', 'FAQ berhasil diperbarui!');
    }

    /**
     * Remove the specified FAQ from storage.
     */
    public function destroy(Faq $faq)
    {
        // Menghapus FAQ
        $faq->delete();

        // Redirect setelah hapus berhasil
        return redirect()->route('faq.index')->with('success', 'FAQ berhasil dihapus!');
    }
}
