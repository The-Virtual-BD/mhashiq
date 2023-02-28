<x-app-layout>
    <x-dashnav/>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex justify-between">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Volunteer Experiences</h2>
            <h1 class="invisible">Volunteer Experiences</h1>
            <a href="{{route('volunteerExperiences.create')}}">

                <button class="bg-nightblue px-2 py-1 mx-2 rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Add Experience</button>
            </a>
        </div>
        <div class="">
            @forelse ($vexperiences as $vexperience)
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
                    <div class="flex justify-end gap-2">
                        <a href="{{route('volunteerExperiences.edit',$vexperience->id)}}">
                            <button class="bg-midgray px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Edit</button>
                        </a>
                        <form action="{{route('volunteerExperiences.destroy', $vexperience->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-yellow-500 px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-red-500 delete" id="">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</x-app-layout>
