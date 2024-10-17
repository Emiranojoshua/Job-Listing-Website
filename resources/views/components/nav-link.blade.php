@props([
    'active' => true,
])
<li>
    <a {{ $attributes }} class="{{ $active ? 'active' : '' }}">{{ $slot }}</a>
</li>