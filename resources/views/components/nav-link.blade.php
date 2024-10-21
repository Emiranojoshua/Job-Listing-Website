@props([
    'active' => true,
])
<a {{ $attributes }}
    class="{{ !$active ? 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' }}">{{ $slot }}</a>
