<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 py-5 sm:px-6 lg:px-8">
        <div class="flex justify-center h-16">
                <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('about') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>
        </div>
    </div>
</nav>

<nav x-data="{ open: false }" class="hidden sm:block bg-white dark:bg-gray-800 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto grid grid-cols-4 gap-5">
        <div class="col-span-1"></div>
        <div class="col-span-3 space-x-4">
            <x-nav-link :href="route('about')" :active="request()->routeIs('about')">About</x-nav-link>
            <x-nav-link :href="route('publications')" :active="request()->routeIs('publications')">Publications</x-nav-link>
            <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">Projects</x-nav-link>
            <x-nav-link :href="route('volunteerex')" :active="request()->routeIs('volunteerex')">Volunteering Experience </x-nav-link>
            <x-nav-link :href="route('colaboration')" :active="request()->routeIs('colaboration')">Collaboration Network</x-nav-link>
        </div>
    </div>
</nav>
