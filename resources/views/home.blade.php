<x-layout>
    @auth
        ou are loggged in
    @endauth

    @guest
        please login in
    @endguest

    <img src="{{ Vite::asset('resources/images/image.jpg') }}" alt="">
    {{-- <img src="resources/images/image.jpg" alt="" srcset=""> --}}

</x-layout>