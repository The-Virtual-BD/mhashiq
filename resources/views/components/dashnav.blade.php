<div class="bg-white mb-3 shadow rounded-md">
    <!-- Navigation Links -->
    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.*')">
            {{ __('Profile') }}
        </x-nav-link>
        <x-nav-link :href="route('apublications.index')" :active="request()->routeIs('apublications.*')">
            {{ __('Manage Publications') }}
        </x-nav-link>
        <x-nav-link :href="route('aprojects.index')" :active="request()->routeIs('aprojects.*')">
            {{ __('Manage Projects') }}
        </x-nav-link>
        <x-nav-link :href="route('volunteerExperiences.index')" :active="request()->routeIs('volunteerExperiences.*')">
            {{ __('Manage Vltr.Exp') }}
        </x-nav-link>
        <x-nav-link :href="route('galleryImages.index')" :active="request()->routeIs('galleryImages.*')">
            {{ __('Manage Gallery') }}
        </x-nav-link>
    </div>
</div>
