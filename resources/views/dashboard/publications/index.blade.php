<x-app-layout>
    <x-dashnav/>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex justify-between">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Publications</h2>
            <h1 class="invisible">Publications</h1>
            <a href="{{route('apublications.create')}}">

                <button class="bg-nightblue px-2 py-1 mx-2 rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Add Publication</button>
            </a>
        </div>
        <div class="">
            @forelse ($publications as $publication)
            <div class="bg-white p-5 shadow rounded-md text-nightblue font-medium mt-5">
                <div class="flex justify-between">

                    <p class="uppercase text-xs">{{$publication->category}}</p>
                    <div class="flex gap-2">
                        <a href="{{route('apublications.edit',$publication->id)}}">
                            <button class="bg-midgray px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Edit</button>
                        </a>
                        <form action="{{route('apublications.destroy', $publication->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-yellow-500 px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-red-500 delete" id="">Delete</button>
                        </form>
                    </div>
                </div>
                <h3 class="font-medium font-quick text-base mt-2">{{$publication->title}}</h3>
                <div class="flex items-center space-x-3 text-sm mt-2">
                    <span>{{$publication->publish_date}}</span>
                    <span class="iconify" data-icon="octicon:dot-fill-24"></span>
                    <span>{{$publication->journal}}</span>
                    @if ($publication->volume)
                    <span class="iconify" data-icon="octicon:dot-fill-24"></span>
                    <span>{{$publication->volume}}</span>
                    @endif
                </div>
                <div class="flex items-center gap-2 text-sm mt-2 text-midgray">
                    <span class="iconify" data-icon="material-symbols:group-sharp"></span>
                    <p class="">{{$publication->authors}}</p>
                </div>

                <div class="flex gap-4 text-sm mt-2 text-midgray">
                    <a href="{{$publication->file}}" class="flex items-center gap-2"><span class="iconify"
                            data-icon="bi:file-earmark-pdf"></span>View PDF</a>
                    <a href="https://www.doi.org/{{$publication->doi}}" class="flex items-center gap-2"><span class="iconify text-yellow-500" data-icon="academicons:doi"></span>{{$publication->doi}}</a>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</x-app-layout>
