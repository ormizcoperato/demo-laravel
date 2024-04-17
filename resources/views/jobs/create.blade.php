<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        {{-- @csrf creates a hidden input for the server --}}
        @csrf

        <x-form-field>
            <x-form-label for="title">
                Title:
            </x-form-label>
            <x-form-input name="title"/>
            <x-form-error name="title"/>
        </x-form-field>

        <x-form-field class="mt-4">
            <x-form-label for="salary">
                Salary:
            </x-form-label>
            <x-form-input name="salary"/>
            <x-form-error name="title"/>
        </x-form-field>

        <div class="mt-6">
            <button type="reset" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded mr-2">
                Reset
            </button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </div>
    </form>
</x-layout>
