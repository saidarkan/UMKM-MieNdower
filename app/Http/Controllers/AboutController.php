<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

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
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        About::create($request->all());
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
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $about->update($request->all());
        return redirect()->route('about.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'Data berhasil dihapus');
    }
}

