@props(['active' => false])
<a {{ $attributes }}
   class="nav-link
   {{ $active ? 'text-red-600 px-4 py-2 text-l font-bold border-b-2 border-red-600 transition-all' : 'text-gray-500 border-b-2 border-transparent' }}
   hover:text-red-600 hover:border-red-600 px-4 py-2 text-l font-medium transition duration-300 ease-in-out"
   aria-current="{{ $active ? 'page' : false }}">
   {{ $slot }}
</a>
