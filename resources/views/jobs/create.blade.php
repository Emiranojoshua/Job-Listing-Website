<x-layout>
    <x-form.form class="space-y-4" action="/jobs" method="POST" caption="Create Job" _method="post">
        <x-form.label-input label="title" type="text" name="title" :value="old('title')">Job Title</x-form.label-input>
        <x-form.label-input label="salary" type="text" name="salary" :value="old('salary')">Salary</x-form.label-input>
        <x-form.label-input label="location" type="text" name="location" :value="old('location')">Location</x-form.label-input>
        <x-form.label-input label="time" type="text" name="time" :value="old('time')">Work Duration</x-form.label-input>

        <x-form.submit-button>Sign in</x-form.submit-button>
    </x-form.form>
</x-layout>
