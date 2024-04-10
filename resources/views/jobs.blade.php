<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{$job->employer->name}}
                </div>
                <div>
                    <strong>{{$job['title']}}</strong> pays {{$job['salary']}} yearly.
                </div>
            </a>
        @endforeach

        <div class="bg-slate-300 px-4 py-2 rounded-lg">
            {{ $jobs->onEachSide(2)->links() }} <!-- built-in function for pagination support -->
        </div>
    </div>
</x-layout>
