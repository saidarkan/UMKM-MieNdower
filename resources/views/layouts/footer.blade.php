<!-- Foooter -->
<section class="bg-red-700" id="contact">

    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">

        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-gray-900">
                    About
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-gray-900">
                    Artikel
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-gray-900">
                    Team
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-gray-900">
                    Pricing
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-gray-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-gray-900">
                    Terms
                </a>
            </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6">

            @foreach ($contacts as $contact)
            <a href="{{ $contact->link_medsos }}" class="text-white hover:text-gray-100">
                <span class="sr-only">{{ $contact->nama_medsos }}</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="{{ $contact->icon_medsos }}" clip-rule="evenodd"></path>
                </svg>
            </a>
        @endforeach

        </div>
        <p class="mt-8 text-base leading-6 text-center text-white">
            © 2021 K6, Inc. All rights reserved.
        </p>
    </div>
</section>
