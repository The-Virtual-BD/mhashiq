<x-app-layout>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Projects</h2>
            <h1 class="invisible">Projects</h1>
        </div>
        <div class="flex justify-between">
            <form action="">
                <div class="">
                    <label for="shortby" class="text-midgray text-xs">Short by:</label>
                    <select name="shortby" id="shortby" class="border-none bg-lowgray rounded-md text-nightblue text-xs focus:right-0 focus:border-none active:right-0 active:border-0">
                        <option value="1">Title (A-Z)</option>
                        <option value="1">Title (Z-A)</option>
                        <option value="1">Date (Newest First)</option>
                        <option value="1">Date (Oldest First)</option>
                        <option value="1">Type</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="">
                    <label for="shortby" class="text-midgray text-xs">Search:</label>
                    <input name="shortby" id="shortby" class="border-none bg-lowgray rounded-md text-nightblue text-xs focus:right-0 focus:border-none active:right-0 active:border-0 py-2 px-3" placeholder="Search"/>
                </div>
            </form>
        </div>
        <div class="">
            <div class="bg-white p-5 shadow rounded-md text-nightblue font-medium mt-5">
                <h3 class="font-medium font-quick text-base mt-2">Distribution and Potential Uses of Halophytes within the Gulf Cooperation Council States</h3>
                <div class="flex items-center space-x-3 text-sm mt-2">
                    <span>1 May 2022</span>
                </div>
                <div class="flex items-center gap-2 text-sm mt-2 text-midgray">
                    <span class="iconify" data-icon="material-symbols:group-sharp"></span>
                    <p class="">Al-Azzawi MJ, Md. Mehedi Hassan</p>
                </div>

                <div class="flex gap-4 text-sm mt-2 text-midgray">
                    <a href="" class="flex items-center gap-2"><span class="iconify" data-icon="bi:file-earmark-pdf"></span>View PDF</a>
                    <a href="" class="flex items-center gap-2"><span class="iconify" data-icon="material-symbols:file-present-outline"></span>10.3390/agronomy12051030</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
