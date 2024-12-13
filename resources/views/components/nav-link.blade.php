@props(['active' => false])
<a {{ $attributes }}
   class="
   {{ $active ? 'text-red-600 px-2 py-1 text-sm font-medium border-b-2 border-red-600 transition-all' : 'text-gray-500 border-b-2 border-transparent' }}
   hover:text-red-600 hover:border-red-600 px-2 py-1 text-sm font-medium transition
   "
   aria-current="{{ $active ? 'page' : false }}">
   {{ $slot }}
</a>

