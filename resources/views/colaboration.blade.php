<x-app-layout>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Research Collaboration</h2>

            <h1 class="invisible">Research Collaboration</h1>
        </div>
        <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-5">
            @forelse ($members as $member)
            {{-- Item --}}
            <div class="flex items-start rounded-md rounded-bl shadow-md gap-5 p-3 cursor-pointer">
                <div class="bg-white w-24 aspect-square rounded-full bg-no-repeat bg-cover bg-center shadow" style="background-image: url('{{ asset($member->photo) }}');min-width:96px !important;"></div>
                <div class="">
                    <h3 class="font-quick font-medium text-nightblue">{{$member->name}}</h3>
                    <p class="text-midgray">{{$member->designation}}</p>
                    <p class="flex items-center biotooltiptoggle text-norblue"><span class="iconify mr-2" data-icon="iconoir:profile-circle" ></span> Bio</p>


                    <div class="absolute bg-white shadow p-4 rounded-md text-midgray w-full min-h-full text-sm biotooltip hidden z-50 top-0 left-0 right-0 transition-all duration-150 ease-in-out">
                        <div class="closethispopup flex justify-end"><button class="font-bold text-nightblue bg-nightblue/20 rounded p-2"><span class="iconify" data-icon="ic:round-close"></span></button></div>
                        <div class="mt-4 p-1">
                            <div class="flex justify-center items-center flex-col">
                                <div class="bg-white w-24 aspect-square rounded-full bg-no-repeat bg-cover bg-center shadow border border-nightblue" style="background-image: url('{{ asset($member->photo) }}');min-width:96px !important;"></div>
                                <h3 class="font-quick font-medium text-nightblue mt-3">{{$member->name}}</h3>
                                <p class="text-midgray">{{$member->designation}}</p>
                            </div>
                            <p class="mt-4 text-center sm:text-justify">{{$member->bio}}</p>
                        </div>
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
            $('.closethispopup').click(function (e) {
                e.preventDefault();
                $(this).closest('.biotooltip').addClass('hidden');
            });
        </script>
    </x-slot>
</x-app-layout>
