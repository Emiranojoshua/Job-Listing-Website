<x-layout>


    <x-jobs.index-layout>

      @foreach ($jobs as $job)
            <x-jobs.index-job url="{{ $job->id }}" employer="{{ $job->employers->name }}"
                title="{{ $job->title }}"></x-jobs.index-job>
        @endforeach 


    </x-jobs.index-layout>




</x-layout>
