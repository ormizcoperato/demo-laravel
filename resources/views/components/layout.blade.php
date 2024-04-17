<x-html-base>
    <section class="mt-20 mx-20">
        <div class="flex justify-between">
            <div>
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                <x-nav-link href="/jobs/create" :active="request()->is('jobs/create')">Create Job</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>

            <div>
                {{-- if user is not logged in --}}
                @guest
                    <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                @endguest
            </div>
        </div>

        <h2 class="mt-3 text-4xl">
            {{ $heading }}
        </h2>

        <hr class="mt-3 mb-3">
        {{ $slot }}
    </section>
</x-html-base>
