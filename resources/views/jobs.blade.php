<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <x-nav-link href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{$job['title']}}</strong> pays {{$job['salary']}} yearly.
                </x-nav-link>
            </li>
        @endforeach
    </ul>
</x-layout>
