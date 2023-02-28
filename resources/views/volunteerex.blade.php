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
                        <div class="w-16 aspect-square rounded-full bg-contain bg-center bg-no-repeat" style="background-image: url('{{ asset($vexperience->logo) }}');min-width:96px !important;">

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


    {{-- Gallery --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5 mt-4">
        <div class="flex" id="gallerytitle">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Gallery</h2>
            <h1 class="invisible">Gallery</h1>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-4" id="gallerydiv">

            @foreach ($images as $image)
            <div class="bg-no-repeat bg-cover bg-center aspect-square rounded-sm " style="background-image: url('{{ asset($image->photo) }}')" onclick="openImagepop('{{$image->photo}}')">

            </div>

            @endforeach
        </div>
        <div class="mt-4" id="pagination">
            {!! $images->render() !!}
        </div>
        <div class="aspect-video bg-nightblue shadow-xl hidden rounded-md bg-no-repeat bg-center bg-cover" id="imagepopup">
            <div class="flex justify-end pt-2 pr-2"><span class="iconify bg-white/60 hover:bg-white text-nightblue hover:text-red-500 rounded p-2 text-4xl" data-icon="charm:cross" onclick="closepopup()"></span></div>
        </div>
    </div>


    <x-slot name="script">
        <script>
            function openImagepop(link) {
                var url = "url('"+link+"')";
                $('#gallerydiv').toggleClass('hidden').toggleClass('grid');
                $('#gallerytitle,#pagination').toggleClass('hidden');

                $('#imagepopup').css("background-image", url);
                $('#imagepopup').toggleClass('hidden');
            }

            function closepopup() {
                var url = "url('')";
                $('#gallerydiv').toggleClass('hidden').toggleClass('grid');
                $('#gallerytitle,#pagination').toggleClass('hidden');

                $('#imagepopup').css("background-image", url).toggleClass('hidden');
            }
        </script>
    </x-slot>
</x-app-layout>
