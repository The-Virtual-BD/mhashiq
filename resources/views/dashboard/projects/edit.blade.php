<x-app-layout>
    <x-dashnav/>
    <form action="{{route('aprojects.update',$project->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
                <div class="flex mb-4">
                    <h2 class="font-medium font-mont text-nightblue text-base uppercase">Edit this Publication's Informations</h2>
                </div>
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <textarea id="title" name="title" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm" placeholder="you@example.com">{{$project->title}}</textarea>
                    </div>



                    <div class="col-span-6 sm:col-span-3">
                        <label for="event_date" class="block text-sm font-medium text-gray-700">Event Date</label>
                        <input type="date" name="event_date" id="event_date" autocomplete="event_date"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm" value="{{$project->event_date}}">
                    </div>

                    <div class="col-span-6">
                        <label for="volunteers" class="block text-sm font-medium text-gray-700">Volunteers</label>
                        <input type="text" name="volunteers" id="volunteers"
                            autocomplete="volunteers"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm" value="{{$project->volunteers}}">
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="file" class="block text-sm font-medium text-gray-700">File</label>
                        <input type="file" name="file" id="file" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm  text-sm text-nightblue border cursor-pointer file:bg-nightblue file:border-0 file:text-white file:h-full file:uppercase h-10">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="link" class="block text-sm font-medium text-gray-700">Link</label>
                        <input type="text" name="link" id="link" autocomplete="link"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm" value="{{$project->link}}">
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex justify-end">
                <button type="submit"
                    class="bg-nightblue px-2 py-1 rounded-md flex justify-center items-center text-white uppercase text-sm hover:bg-midgray">Save</button>

            </div>
        </div>
    </form>
</x-app-layout>
