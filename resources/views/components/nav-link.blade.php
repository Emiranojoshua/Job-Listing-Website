@props([
    'testing' => true,
])
<li>
    <a {{ $attributes }} >{{ $testing }}{{ $slot }}</a>
</li>