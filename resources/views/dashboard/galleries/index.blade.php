<x-app-layout>
    <x-dashnav/>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex justify-between">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Gallery Images</h2>
            <h1 class="invisible">Gallery Images</h1>
            <a href="{{route('galleryImages.create')}}">

                <button class="bg-nightblue px-2 py-1 mx-2 rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Add New Image</button>
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-4">

            @foreach ($images as $image)
            <div class="bg-no-repeat bg-cover bg-center aspect-square rounded-sm" style="background-image: url('{{ asset($image->photo) }}')">

            </div>

            @endforeach
        </div>
    </div>
</x-app-layout>
