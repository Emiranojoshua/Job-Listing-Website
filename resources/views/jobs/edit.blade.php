<x-layout>
    <x-form.form class="space-y-4" action="/jobs/{{ $job->id }}" method="POST" caption="Edit Job" _method="PATCH">
        <x-form.label-input label="title" type="text" name="title" :value="old('title')" value="{{ $job->title }}">Job Title</x-form.label-input>
        <x-form.label-input label="salary" type="text" name="salary" :value="old('salary')"  value="{{ $job->salary }}">Salary</x-form.label-input>
        <x-form.label-input label="location" type="text" name="location" :value="old('location')"  value="{{ $job->location }}">Location</x-form.label-input>
        <x-form.label-input label="time" type="text" name="time" :value="old('time')"  value="{{ $job->time }}">Work Duration</x-form.label-input>


        <x-form.submit-button>Submit</x-form.submit-button>
    </x-form.form>
</x-layout>
