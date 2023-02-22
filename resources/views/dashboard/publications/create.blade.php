<x-app-layout>
    <x-dashnav/>
    <form action="{{route('apublications.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
                <div class="flex mb-4">
                    <h2 class="font-medium font-mont text-nightblue text-base uppercase">New Publication Informations</h2>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" name="category" autocomplete="category-name"
                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-nightblue focus:outline-none focus:ring-nightblue sm:text-sm">
                            <option value="Article">Article</option>
                            <option value="Chapter">Chapter</option>
                            <option value="Conference Paper">Conference Paper</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="journal" class="block text-sm font-medium text-gray-700">Journal</label>
                        <input type="text" name="journal" id="journal" autocomplete="family-name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm">
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <textarea id="title" name="title" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm" placeholder="you@example.com"></textarea>
                    </div>



                    <div class="col-span-6 sm:col-span-3">
                        <label for="date" class="block text-sm font-medium text-gray-700">Publish Date</label>
                        <input type="date" name="date" id="date" autocomplete="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="volume" class="block text-sm font-medium text-gray-700">Volume</label>
                        <input type="text" name="volume" id="volume" autocomplete="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm">
                    </div>

                    <div class="col-span-6">
                        <label for="authors" class="block text-sm font-medium text-gray-700">Authors</label>
                        <input type="text" name="authors" id="authors"
                            autocomplete="authors"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="file" class="block text-sm font-medium text-gray-700">File</label>
                        <input type="file" name="file" id="file" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm  text-sm text-nightblue border cursor-pointer file:bg-nightblue file:border-0 file:text-white file:h-full file:uppercase h-10">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="doi" class="block text-sm font-medium text-gray-700">Doi</label>
                        <input type="text" name="doi" id="doi" autocomplete="address-level1"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-nightblue focus:ring-nightblue sm:text-sm">
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
