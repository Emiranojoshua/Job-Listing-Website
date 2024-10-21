<x-layout>
    @auth
        ou are loggged in
    @endauth

    @foreach ($jobs as $job)
        {{ $job->employers->name}}</br>
    @endforeach
    @guest
        please login in
    @endguest

    <div>
        <a href="#">
            <p class="employer">Employer name</p>
            <p class="job_details">
                job deails wih 
            </p>
            <p>paymen amount</p>
        </a>
    </div>
</x-layout>
