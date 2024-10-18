<x-layout>
    <x-form action="/register" method="POST" _method="post">
        <x-label for="full_name">Full name</x-label>
        <x-input type="full_name" name="full_name" :value="old('full_name')"></x-input>
        <x-error error="full_name"></x-error>

        <x-label for="email">Email</x-label>
        <x-input type="email" name="email" :value="old('email')"></x-input>
        <x-error error="email"></x-error>


        <x-label for="password">Password</x-label>
        <x-input type="password" name="password"></x-input>
        <x-error error="password"></x-error>


        <x-label for="password_confirmation">Confirm Password</x-label>
        <x-input type="password" name="password_confirmation"></x-input>
        <x-error error="password_confirmation"></x-error>

        </br>
        <x-input type="submit" value="Register"></x-input>
    </x-form>
</x-layout>
