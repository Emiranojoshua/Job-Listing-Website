<x-layout>
    <x-form.form class="space-y-6" action="/login" method="POST" caption="Sign in to your account">

        <x-form.label-input label="email" type="email" name="email" :value="old('email')">Email</x-form.label-input>

        <x-form.label-input label="password" type="password" name="password"
            :value="old('password')">Password</x-form.label-input>
        {{-- <x-form.error error="password"></x-form.error> --}}


        <x-form.submit-button>Sign in</x-form.submit-button>
    </x-form.form>
</x-layout>
