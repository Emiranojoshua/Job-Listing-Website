<x-layout>
    <x-form.form class="space-y-6" action="/register" method="POST" caption="Register account">

        <x-form.label-input label="full_name" type="full_name" name="full_name" :value="old('full_name')">Full
            Name</x-form.label-input>

        <x-form.label-input label="email" type="email" name="email" :value="old('email')">Email</x-form.label-input>
        
        {{-- <input type="checkbox" name="employable" id="employable"> Employable?</input> --}}
        <x-form.label-input label="employer_name" type="text" name="employer_name" :value="old('employer_name')">Employer Name</x-form.label-input>

        

        <x-form.label-input label="password" type="password" name="password">Password</x-form.label-input>

        <x-form.label-input label="password_confirmation" type="password" name="password_confirmation">Confirm
            Password</x-form.label-input>
        {{-- <x-form.error error="password"></x-form.error> --}}

        <x-form.submit-button>Regiser</x-form.submit-button>
    </x-form.form>
</x-layout>
