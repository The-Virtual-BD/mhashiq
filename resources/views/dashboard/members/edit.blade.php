<x-app-layout>
    <x-dashnav/>
    <form action="{{route('members.update',$member->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
                <div class="flex mb-4">
                    <h2 class="font-medium font-mont text-nightblue text-base uppercase">Edit this Member</h2>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name"
                            autocomplete="name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm" value="{{$member->name}}">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                        <input type="file" name="photo" id="photo" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm  text-sm text-nightblue border cursor-pointer file:bg-nightblue file:border-0 file:text-white file:h-full file:uppercase h-10">
                    </div>

                    <div class="col-span-6">
                        <label for="designation" class="block text-sm font-medium text-gray-700">Designation</label>
                        <input type="text" name="designation" id="designation"
                            autocomplete="designation"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm" value="{{$member->designation}}">
                    </div>

                    <div class="col-span-6">
                        <label for="start" class="block text-sm font-medium text-gray-700">Bio</label>
                        <textarea id="bio" name="bio" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm">{{$member->bio}}</textarea>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex justify-end">
                <button type="submit"
                    class="bg-nightblue px-2 py-1 rounded-md flex justify-center items-center text-white uppercase text-sm hover:bg-midgray">Update Member</button>

            </div>
        </div>
    </form>
</x-app-layout>
