<div class="">
    <div class="bg-norblue rounded-lg p-6 sm:min-h-screen">
        <div class="p-7">
            @auth
            <a href="{{route('profile.edit')}}" id="profile_pic">
                <div class="bg-white aspect-square rounded-full bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset($profile->photo) }}')"></div>
            </a>
            @endauth
            @guest
            <div class="bg-white aspect-square rounded-full bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset($profile->photo) }}')"></div>

            @endguest
            {{-- background-image: url('{{ $item->cover }}') --}}
        </div>
        <div class="text-center">
            <p class="uppercase text-white ">{{$profile->designation}}</p>
            <p class="uppercase text-white font-bold ">{{$profile->first_name.' '.$profile->last_name}}</p>

            @if ($profile->google_scolar || $profile->google_scolar)

            <div class="text-white flex justify-center items-center text-2xl gap-3 mt-4">
                <a href="{{$profile->research_gate}}" target="_blank">
                    <img src="{{asset('rg.png')}}" alt="" srcset="" class="w-6 h-auto">
                </a>
                <a href="{{$profile->google_scolar}}" target="_blank">
                    <img src="{{asset('gs.png')}}" alt="" srcset="" class="w-6 h-auto">
                </a>
            </div>
            @endif
            <div class="text-white text-center mt-5 sm:hidden">
                {!!$profile->bio_mini!!}
            </div>
            <div class="flex sm:hidden justify-center items-center gap-5 mt-5">
                <a href="tel:{{$profile->phone}}" class="w-8 bg-white/25 text-white aspect-square flex justify-center items-center rounded-full"><span class="iconify text-xl" data-icon="ic:baseline-local-phone"></span></a>
                <a href="mailto:{{$profile->email}}" class="w-8 bg-white/25 text-white aspect-square flex justify-center items-center rounded-full"><span class="iconify text-xl" data-icon="mdi:email-outline"></span></a>
            </div>
            <hr class="hidden sm:block my-5 border-dashed border-white/40">
            <div class="hidden sm:flex justify-center items-center space-x-2">
                <span class="iconify text-[#A6CE39]" data-icon="simple-icons:orcid"></span>
                <a href="https://orcid.org/{{$profile->orcid_id}}" class="text-white underline" target="_blank">{{$profile->orcid_id}}</a>
            </div>
            <hr class="hidden sm:block my-5 border-dashed border-white/40">
            <div class="hidden sm:flex gap-2.5">
                <div class="w-6 text-white">
                    <span class="iconify text-2xl" data-icon="gg:profile"></span>
                </div>
                <div class="text-white text-left">
                    {!!$profile->bio_mini!!}
                </div>
            </div>
            <hr class="hidden sm:block my-5 border-dashed border-white/40">
            <div class="hidden sm:flex gap-2.5">
                <div class="w-6 text-white">
                    <span class="iconify text-2xl" data-icon="ic:baseline-local-phone"></span>
                </div>
                <p class="text-left text-white">{{$profile->phone}}</p>
            </div>
            <div class="hidden sm:flex gap-2.5 mt-5">
                <div class="w-6 text-white">
                    <span class="iconify text-2xl" data-icon="mdi:email-outline"></span>
                </div>
                <p class="text-left text-white">{{$profile->email}}</p>
            </div>
            <div class="hidden sm:flex gap-2.5 mt-5">
                <div class="w-6 text-white">
                    <span class="iconify text-2xl" data-icon="material-symbols:location-on"></span>
                </div>
                <div class="text-left text-white">
                    {!!$profile->address!!}
                </div>
            </div>
            <hr class="my-5 border-dashed border-white/40">
            <div class="text-white flex justify-center items-center text-2xl gap-3">
                <a href="{{$profile->facebook}}"><span class="iconify" data-icon="ph:facebook-logo-fill"></span></a>
                <a href="{{$profile->instagram}}"><span class="iconify" data-icon="ri:instagram-fill"></span></a>
                <a href="{{$profile->linkedin}}"><span class="iconify" data-icon="ph:linkedin-logo-fill"></span></a>
            </div>
        </div>
        @if ($profile->cv)
        <a href="{{$profile->cv}}">
            <button class="bg-white rounded-md w-full mt-10 uppercase text-nightblue py-2 hover:scale-105 hover:shadow-lg transition ease-in-out duration-150">Download CV</button>
        </a>
        @endif
        @auth
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="bg-white/40 rounded-md w-full mt-5 uppercase text-nightblue py-2 hover:scale-105 hover:shadow-lg transition ease-in-out duration-150 flex justify-center items-center"><span class="iconify  mr-2" data-icon="material-symbols:power-rounded-sharp"></span>Logout</button>
        </form>
        @endauth
    </div>
    <div class="block sm:hidden my-4 rounded-lg overflow-scroll shadow-md">
        <nav x-data="{ open: false }" class=" bg-white dark:bg-gray-800 px-2 w-full overflow-scroll flex space-x-4">
            <!-- Primary Navigation Menu -->
            <x-nav-link class="whitespace-nowrap" :href="route('about')" :active="request()->routeIs('about')">About</x-nav-link>
            <x-nav-link class="whitespace-nowrap" :href="route('publications')" :active="request()->routeIs('publications')">Publications</x-nav-link>
            <x-nav-link class="whitespace-nowrap" :href="route('projects')" :active="request()->routeIs('projects')">Projects</x-nav-link>
            <x-nav-link class="whitespace-nowrap" :href="route('volunteerex')" :active="request()->routeIs('volunteerex')">Volunteering Experience </x-nav-link>
            <x-nav-link class="whitespace-nowrap" :href="route('colaboration')" :active="request()->routeIs('colaboration')">Collaboration Network</x-nav-link>
        </nav>
    </div>
</div>
