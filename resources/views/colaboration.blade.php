<x-app-layout>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Team</h2>

            <h1 class="invisible">Team</h1>
        </div>
        <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-5">
            @forelse ($members as $member)
            {{-- Item --}}
            <div class="flex items-center h-24 rounded-md rounded-l-full shadow-md gap-5">
                <div class="bg-white w-24 aspect-square rounded-full bg-no-repeat bg-cover bg-center shadow" style="background-image: url('{{ asset($member->photo) }}')"></div>
                <div class="relative">
                    <h3 class="font-quick font-medium text-nightblue">{{$member->name}}</h3>
                    <p class="text-midgray">{{$member->designation}}</p>
                    <p class="flex items-center biotooltiptoggle"><span class="iconify mr-2" data-icon="iconoir:profile-circle" ></span> Bio</p>
                    <div class="absolute bg-white shadow p-4 rounded-md text-midgray w-[250px] text-sm biotooltip hidden z-50 right-2 sm:right-0">
                        <p >{{$member->bio}}</p>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
    <x-slot name="script">
        <script>
            $('.biotooltiptoggle').click(function (e) {
                e.preventDefault();
                $('.biotooltip').addClass('hidden');
                $(this).siblings('.biotooltip').removeClass('hidden');
            });

            $(document).on('click', function(event) {
                if(!$(event.target).closest('.biotooltip').length && !$(event.target).closest('.biotooltiptoggle').length) {
                    $('.biotooltip').addClass('hidden');
                }
            });
        </script>
    </x-slot>
</x-app-layout>
