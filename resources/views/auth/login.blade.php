<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        {{-- @csrf creates a hidden input for the server --}}
        @csrf

        <x-form-field class="mt-4">
            <x-form-label for="email">
                Email:
            </x-form-label>
            <x-form-input name="email" type="email"/>
            <x-form-error name="email"/>
        </x-form-field>

        <x-form-field class="mt-4">
            <x-form-label for="password">
                Password:
            </x-form-label>
            <x-form-input name="password" type="password"/>
            <x-form-error name="password"/>
        </x-form-field>


        <div class="mt-6">
            <a href="/" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded mr-2">
                Cancel
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
                Login
            </button>
        </div>
    </form>
</x-layout>
