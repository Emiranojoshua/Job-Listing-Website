<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Project</title>
</head>

<body>
    <nav>
        <ul class="nav">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="contact" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        </ul>
        <ul class="nav">
            <x-nav-link href="/login" :active="request()->is('/login')">Login</x-nav-link>
            <x-nav-link href="/logout" :active="request()->is('/logout')">Logout</x-nav-link>
        </ul>
    </nav>

</body>

</html>
