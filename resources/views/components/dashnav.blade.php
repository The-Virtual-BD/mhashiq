<div class="bg-white mb-3 shadow rounded-md">
    <!-- Navigation Links -->
    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.*')">
            {{ __('Profile') }}
        </x-nav-link>
        <x-nav-link :href="route('apublications.index')" :active="request()->routeIs('apublications.*')">
            {{ __('Manage Publications') }}
        </x-nav-link>
    </div>
</div>
