<x-html-base>
    <section class="mt-20 mx-20">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        <x-nav-link href="/jobs/create" :active="request()->is('jobs/create')">Create Job</x-nav-link>

        <h2 class="mt-3 text-4xl">
            {{ $heading }}
        </h2>

        <hr class="mt-3 mb-3">
        {{ $slot }}
    </section>
</x-html-base>
