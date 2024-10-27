@props(['employer', 'title', 'url'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">

        <a href="/jobs/{{ $url }}" class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{ $employer }}</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $title }}</p>
        </a>
    </div>

</li>
