<?php
namespace App\Http\Controllers;

use App\Models\Qna;
use Illuminate\Http\Request;

class QnaController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel qna
        $qna = Qna::all();

        // Kirim data ke view
        return view('qna.index', compact('qna'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string|max:255',
        ]);

        // Simpan data ke tabel qna
        Qna::create($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('qna.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Qna $qna)
    {
        // Hapus data dari tabel qna
        $qna->delete();

        // Redirect setelah penghapusan
        return redirect()->route('qna.index')->with('success', 'Data berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        $qna = Qna::findOrFail($id);

        // Validasi input
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string|max:255',
        ]);

        // Update data di tabel qna
        $qna->update($request->all());

        return redirect()->route('qna.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function edit($id)
    {
        $qna = Qna::findOrFail($id);

        return view('qna.edit', compact('qna')); // Ubah view menjadi 'qna.edit'
    }
}
