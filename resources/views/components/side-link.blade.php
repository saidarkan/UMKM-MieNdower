<a {{ $attributes }}
   class="flex items-center p-2
   {{ $active ? 'bg-red-500 text-white' : 'bg-white text-gray-500' }}
   hover:bg-red-200 hover:text-red-500 transition duration-300 ease-in-out rounded-lg">
    <svg class="w-5 h-5 text-current transition duration-75" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l7 7M5 12l7-7" />
    </svg>
    <span class="ms-3">{{ $slot }}</span>
</a>
