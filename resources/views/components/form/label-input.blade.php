@props(['label'])

<div>
    <label for="{{ $label }}"class="block text-sm font-medium leading-6 text-gray-900">{{ $slot }}</label>
    <div class="mt-1">
        <input {{ $attributes->merge(['type' => 'text']) }}
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <x-form.error error="{{ $label }}"></x-form.error>

    </div>
</div>
