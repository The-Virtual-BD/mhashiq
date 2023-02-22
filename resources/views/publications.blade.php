<x-app-layout>
    {{-- Bio --}}
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
        <div class="flex">
            <h2 class="font-medium font-mont text-nightblue text-base uppercase">Publications</h2>
            <h1 class="invisible">Publications</h1>
        </div>
        
        <div class="flex justify-between mt-4">
            <form action="">
                <div class="">
                    <label for="shortby" class="text-midgray text-xs">Short by:</label>
                    <select name="shortby" id="shortby"
                        class="border-none bg-lowgray rounded-md text-nightblue text-xs focus:right-0 focus:border-none active:right-0 active:border-0">
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
                    <input name="shortby" id="shortby"
                        class="border-none bg-lowgray rounded-md text-nightblue text-xs focus:right-0 focus:border-none active:right-0 active:border-0 py-2 px-3"
                        placeholder="Search" />
                </div>
            </form>
        </div>
        <div class="">
            <div class="bg-white p-5 shadow rounded-md text-nightblue font-medium mt-5">
                <div class="flex justify-between">

                    <p class="uppercase text-xs">ARTICLE</p>
                    <div class="flex gap-2 hidden">
                        <button class="bg-midgray px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-midgray">Edit</button>
                        <button class="bg-yellow-500 px-2 py-1  rounded-md flex justify-center items-center text-white uppercase text-xs hover:bg-red-500 delete" id="" onclick="deleteItem()">Delete</button>
                    </div>
                </div>
                <h3 class="font-medium font-quick text-base mt-2">Distribution and Potential Uses of Halophytes within
                    the Gulf Cooperation Council States</h3>
                <div class="flex items-center space-x-3 text-sm mt-2">
                    <span>1 May 2022</span>
                    <span class="iconify" data-icon="octicon:dot-fill-24"></span>
                    <span>Machine Learning</span>
                    <span class="iconify" data-icon="octicon:dot-fill-24"></span>
                    <span>12(5)</span>
                </div>
                <div class="flex items-center gap-2 text-sm mt-2 text-midgray">
                    <span class="iconify" data-icon="material-symbols:group-sharp"></span>
                    <p class="">Al-Azzawi MJ, Md. Mehedi Hassan</p>
                </div>

                <div class="flex gap-4 text-sm mt-2 text-midgray">
                    <a href="" class="flex items-center gap-2"><span class="iconify"
                            data-icon="bi:file-earmark-pdf"></span>View PDF</a>
                    <a href="" class="flex items-center gap-2"><span class="iconify text-yellow-500"
                            data-icon="academicons:doi"></span>10.3390/agronomy12051030</a>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
            // CKEDITOR.replace('bio', {
            //     customConfig: '/js/ckconfig.js'
            // });


            function deleteItem() {
                if (confirm("Are you sure?")) {
                    console.log('Hi');
                }
                return false;
            }



            function pbformtoggle() {
                $('#pcform').toggleClass('hidden');
            }

            $(document).ready(function () {
                $.ajax({
                    url: "https://serpapi.com/search.json?engine=google_scholar_author",
                    type: 'GET',
                    // dataType: 'jsonp',
                    cors: true ,
                    contentType:'application/json',
                    secure: true,
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                    },
                    data: {
                        author_id: 'Ts2F72QAAAAJ',
                        api_key: '2b064cefd7f4ff3d845c3a580a1be6098887a3c7ae0ee7a7d8675b7cd9b3f07d',
                    },
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader ("Authorization", "Basic " + btoa(""));
                    },
                    success: function (data){
                        console.log(data.organizations[0].name);
                        var organisation = data.organizations[0].name;
                        $("#company").text(organisation);
                    }
                })
            });

        </script>
    </x-slot>
</x-app-layout>
