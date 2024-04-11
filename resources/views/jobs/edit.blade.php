<x-layout>
    <x-slot:heading>
        Edit Job {{$job->title}}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @method('PATCH')
        @csrf

        <div>
            <label for="title"
                   class="block mb-2 text-sm font-medium"
            >
                Title:
            </label>
            <input name="title" id="title" required value="{{ $job->title }}"
                   class="block w-80 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />
        </div>

        <div class="mt-4">
            <label for="salary"
                   class="block mb-2 text-sm font-medium"
            >
                Salary:
            </label>
            <input name="salary" id="salary" required value="{{ $job->salary }}"
                   class="block w-80 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />
        </div>

        @if($errors->any())
            <div class="mt-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-red-500 italic">
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button
                    form="delete-form"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                >
                    Delete Job
                </button>
            </div>

            <div class="mt-6">
                <a href="/jobs/{{ $job->id }}"
                   class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update
                </button>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @method('DELETE')
        @csrf
    </form>
</x-layout>
