<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div>
            <label for="title"
                   class="block mb-2 text-sm font-medium"
            >
                Title:
            </label>
            <input name="title" id="title" required
                   class="block w-80 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />

            @error('title')
            <p class="text-xs text-red-500 font-semibold mt-2">
                {{$message}}
            </p>
            @enderror
        </div>

        <div class="mt-4">
            <label for="salary"
                   class="block mb-2 text-sm font-medium"
            >
                Salary:
            </label>
            <input name="salary" id="salary" required
                   class="block w-80 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />

            @error('salary')
            <p class="text-xs text-red-500 font-semibold mt-2">
                {{$message}}
            </p>
            @enderror
        </div>

        <div class="mt-6">
            <button type="reset" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                Reset
            </button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </div>
    </form>
</x-layout>
