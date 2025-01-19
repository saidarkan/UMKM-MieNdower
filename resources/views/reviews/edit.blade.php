<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Homepage</h1>
        <form action="{{ route('review.update', $review->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Pembuka -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Comment</label>
                <input type="text" name="comment" value="{{ old('comment', $review->comment) }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('comment')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Judul 1 -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Reply </label>
                <input type="text" name="reply" value="{{ old('reply', $review->reply) }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('reply')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Judul 2 -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $review->nama) }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('nama')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

             <!-- Subjudul -->
             <div class="mb-4">
                <label class="block text-sm font-medium">Rating</label>
                <input type="text" name="rating" value="{{ old('rating', $review->rating) }}" class="mt-1 block w-full border-gray-300 rounded-md" />
                @error('rating')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>


            <!-- Tombol Update -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">
                Update
            </button>
        </form>
    </div>
</x-app-layout>
