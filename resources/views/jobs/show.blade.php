<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h3 class="text-2xl">{{$job['title']}}</h3>
    <p>
        This job pays {{$job['salary']}} per year.
    </p>
</x-layout>
