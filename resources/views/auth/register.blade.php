<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        {{-- @csrf creates a hidden input for the server --}}
        @csrf

        <x-form-field>
            <x-form-label for="first_name">
                First Name:
            </x-form-label>
            <x-form-input name="first_name"/>
            <x-form-error name="first_name"/>
        </x-form-field>

        <x-form-field class="mt-4">
            <x-form-label for="last_name">
                Last Name:
            </x-form-label>
            <x-form-input name="last_name"/>
            <x-form-error name="last_name"/>
        </x-form-field>

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

        <x-form-field class="mt-4">
            <x-form-label for="password_confirmation">
                Confirm Password:
            </x-form-label>
            <x-form-input name="password_confirmation" type="password"/>
            <x-form-error name="password_confirmation"/>
        </x-form-field>

        <div class="mt-6">
            <a href="/" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded mr-2">
                Cancel
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
                Register
            </button>
        </div>
    </form>
</x-layout>
