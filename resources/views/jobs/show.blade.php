<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h3 class="text-2xl">{{$job->title}}</h3>
    <p>
        This job pays {{$job->salary}} per year.
    </p>

    <p class="mt-6">
        <x-nav-link href="/jobs/{{ $job->id }}/edit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        >
            Edit Job
        </x-nav-link>
    </p>
</x-layout>
