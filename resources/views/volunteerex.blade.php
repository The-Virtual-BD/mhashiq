<x-app-layout>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Volunteering Experience</h2>
            <h1 class="invisible">Volunteering Experience</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">

            @foreach ($vexperiences as $vexperience)
            <div class="bg-white p-5 shadow rounded-md text-nightblue font-medium mt-5">
                <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center gap-4">
                        <div class="w-16 aspect-square rounded-full bg-contain bg-center bg-no-repeat" style="background-image: url('{{ asset($vexperience->logo) }}')">

                        </div>
                        <div class="font-quick">
                            <p class="text-base font-bold text-nightblue">{{$vexperience->designation}}</p>
                            <p class="text-sm font-normal text-midgray">{{$vexperience->org_name}}</p>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-normal text-midgray">{{$vexperience->start}}</p>-<p class="text-sm font-normal text-midgray">{{$vexperience->end}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>


    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5 mt-4">
        <div class="flex">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Gallery</h2>
            <h1 class="invisible">Gallery</h1>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-4">

            @foreach ($images as $image)
            <div class="bg-no-repeat bg-cover bg-center aspect-square rounded-sm" style="background-image: url('{{ asset($image->photo) }}')">

            </div>

            @endforeach
        </div>
    </div>
</x-app-layout>
