<x-app-layout>
    <x-dashnav/>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex justify-between">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Members</h2>
            <h1 class="invisible">Members</h1>
            <a href="{{route('members.create')}}">

                <button class="bg-nightblue px-2 py-1 mx-2 rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Add Member</button>
            </a>
        </div>
        <div class="mt-4">

            @forelse ($members as $member)
            <div class="flex items-start rounded-md p-4 shadow-md gap-5">
                <div class="bg-white w-24 aspect-square rounded-full bg-no-repeat bg-cover bg-center shadow" style="background-image: url('{{ asset($member->photo) }}');min-width:96px !important;"></div>
                <div class="">
                    <h3 class="font-quick font-medium text-nightblue">{{$member->name}}</h3>
                    <p class="text-midgray">{{$member->designation}}</p>
                    <div class="text-midgray text-sm mt-2">
                        <p>{{$member->bio}}</p>
                    </div>
                </div>
                <div class="flex gap-2 ml-auto">
                    <a href="{{route('members.edit',$member->id)}}">
                        <button class="bg-midgray px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Edit</button>
                    </a>
                    <form action="{{route('members.destroy', $member->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-yellow-500 px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-red-500 delete" id="">Delete</button>
                    </form>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</x-app-layout>
