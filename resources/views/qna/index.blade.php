<x-app-layout>
    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center mb-8">QnA List</h1>

        <!-- Form untuk Mengirim Pertanyaan dan Jawaban Baru -->
        <form method="POST" action="{{ route('qna.store') }}" class="space-y-4 mb-8">
            @csrf
            <div>
                <label for="pertanyaan" class="block text-sm font-medium">Pertanyaan</label>
                <input type="text" name="pertanyaan" id="pertanyaan" value="{{ old('pertanyaan') }}"
                    class="block w-full mt-2 p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                <x-input-error :messages="$errors->get('pertanyaan')" class="mt-2" />
            </div>

            <div>
                <label for="jawaban" class="block text-sm font-medium">Jawaban</label>
                <textarea name="jawaban" id="jawaban" rows="5"
                    class="block w-full mt-2 p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">{{ old('jawaban') }}</textarea>
                <x-input-error :messages="$errors->get('jawaban')" class="mt-2" />
            </div>

            <div class="flex justify-end">
                <x-primary-button class="px-6 py-3">Kirim</x-primary-button>
            </div>
        </form>

        <!-- Daftar QnA -->
        <div class="space-y-6">
            @foreach ($qna as $item)
                <div class="bg-white p-4 rounded-lg shadow-lg transition-all hover:shadow-xl hover:scale-105">
                    <div class="mb-4">
                        <strong class="text-xl">{{ $item->pertanyaan }}</strong>
                    </div>
                    <div class="mb-4">
                        <p><strong>Jawaban:</strong> {{ $item->jawaban }}</p>
                    </div>

                    <div class="flex justify-between items-center">
                        {{-- Edit --}}
                        <a href="{{ route('qna.edit', $item->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 3l8 8-5 5-8-8 5-5zM5 13v6h6" />
                            </svg>
                            Edit
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('qna.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
                                </svg>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
