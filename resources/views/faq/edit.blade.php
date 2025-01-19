<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-xl font-semibold mb-4">Edit FAQ</h2>

            <form action="{{ route('faq.update', $faq->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="pertanyaan" class="block text-sm font-medium text-gray-700">Pertanyaan</label>
                        <input type="text" id="pertanyaan" name="pertanyaan" value="{{ old('pertanyaan', $faq->pertanyaan) }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        @error('pertanyaan') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <label for="jawaban" class="block text-sm font-medium text-gray-700">Jawaban</label>
                        <textarea id="jawaban" name="jawaban" rows="4" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ old('jawaban', $faq->jawaban) }}</textarea>
                        @error('jawaban') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
