<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_medsos' => 'required|string|max:255',
        'icon_medsos' => 'required|string',
        'link_medsos' => 'required|url',
    ]);

    // Simpan data ke database
    Contact::create([
        'nama_medsos' => $request->nama_medsos,
        'icon_medsos' => $request->icon_medsos,
        'link_medsos' => $request->link_medsos,
    ]);

    // Redirect setelah penyimpanan sukses
    return redirect()->route('contacts.index')->with('success', 'Kontak berhasil disimpan');
}

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'nama_medsos' => 'required|string|max:255',
            'icon_medsos' => 'required|string',
            'link_medsos' => 'required|url',
        ]);

        $contact->update($request->only(['nama_medsos', 'icon_medsos', 'link_medsos']));

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
