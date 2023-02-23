<x-app-layout>
    <x-dashnav/>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex justify-between">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Projects</h2>
            <h1 class="invisible">Projects</h1>
            <a href="{{route('aprojects.create')}}">

                <button class="bg-nightblue px-2 py-1 mx-2 rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Add Project</button>
            </a>
        </div>
        <div class="">
            @forelse ($projects as $project)
            <div class="bg-white p-5 shadow rounded-md text-nightblue font-medium mt-5">
                <div class="flex justify-end">
                    <div class="flex justify-end gap-2">
                        <a href="{{route('aprojects.edit',$project->id)}}">
                            <button class="bg-midgray px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Edit</button>
                        </a>
                        <form action="{{route('aprojects.destroy', $project->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-yellow-500 px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-red-500 delete" id="">Delete</button>
                        </form>
                    </div>
                </div>
                <h3 class="font-medium font-quick text-base mt-2">{{$project->title}}</h3>
                <div class="flex items-center space-x-3 text-sm mt-2">
                    <span>{{$project->event_date}}</span>
                </div>
                <div class="flex items-center gap-2 text-sm mt-2 text-midgray">
                    <span class="iconify" data-icon="material-symbols:group-sharp"></span>
                    <p class="">{{$project->volunteers}}</p>
                </div>

                <div class="flex gap-4 text-sm mt-2 text-midgray">
                    <a href="{{$project->file}}" class="flex items-center gap-2"><span class="iconify"
                            data-icon="bi:file-earmark-pdf"></span>View PDF</a>
                    <a href="{{$project->link}}" class="flex items-center gap-2"><span class="iconify" data-icon="material-symbols:file-present-outline"></span>{{$project->link}}</a>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</x-app-layout>
