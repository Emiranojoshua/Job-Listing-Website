<x-layout>
    <x-form action="/login" method="POST" _method="post">
        <x-label for="email">Email</x-label>
        <x-input type="email" name="email" :value="old('email')"></x-input>
        <x-error error="email"></x-error>


        <x-label for="password">Password</x-label>
        <x-input type="password" name="password"></x-input>
        <x-error error="password"></x-error>


        </br>
        <x-input type="submit" value="Login"></x-input>
    </x-form>
</x-layout>
