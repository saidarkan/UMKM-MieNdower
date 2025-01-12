<x-app-layout>
    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_medsos">Nama Medsos:</label>
        <input type="text" id="nama_medsos" name="nama_medsos" value="{{ $contact->nama_medsos }}" required>
        <label for="icon_medsos">Icon Medsos:</label>
        <input type="text" id="icon_medsos" name="icon_medsos" value="{{ $contact->icon_medsos }}" required>
        <label for="link_medsos">Link Medsos:</label>
        <input type="url" id="link_medsos" name="link_medsos" value="{{ $contact->link_medsos }}" required>
        <button type="submit">Update</button>
    </form>
</x-app-layout>
