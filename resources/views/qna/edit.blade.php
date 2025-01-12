<x-app-layout>
    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center mb-8">Edit QnA</h1>

        <form method="POST" action="{{ route('qna.update', $qna->id) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Pertanyaan -->
            <div>
                <label for="pertanyaan" class="block text-sm font-medium">Pertanyaan</label>
                <input type="text" name="pertanyaan" id="pertanyaan" value="{{ old('pertanyaan', $qna->pertanyaan) }}"
                    class="block w-full mt-2 p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                <x-input-error :messages="$errors->get('pertanyaan')" class="mt-2" />
            </div>

            <!-- Jawaban -->
            <div>
                <label for="jawaban" class="block text-sm font-medium">Jawaban</label>
                <textarea name="jawaban" id="jawaban" rows="5"
                    class="block w-full mt-2 p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">{{ old('jawaban', $qna->jawaban) }}</textarea>
                <x-input-error :messages="$errors->get('jawaban')" class="mt-2" />
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <x-primary-button class="px-6 py-3">Update Pesan</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
