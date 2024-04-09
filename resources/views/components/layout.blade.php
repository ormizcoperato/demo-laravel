<x-html-base>
    <div>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/jobs">Jobs</x-nav-link>

        <div class="mt-3">
            {{ $heading }}
        </div>

        <hr class="mt-3 mb-3">
        {{ $slot }}
    </div>
</x-html-base>
