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
                        <option value="2">Title (Z-A)</option>
                        <option value="3">Date (Newest First)</option>
                        <option value="4">Date (Oldest First)</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="">
                    <label for="scarchbytitle" class="text-midgray text-xs">Search:</label>
                    <input name="scarchbytitle" id="scarchbytitle" class="border-none bg-lowgray rounded-md text-nightblue text-xs focus:right-0 focus:border-none active:right-0 active:border-0 py-2 px-3" placeholder="Search by title"/>
                </div>
            </form>
        </div>
        <div class="" id="tag_container">
            @include('layouts.prorend')
        </div>
    </div>
    <x-slot name="script">
        <script>
            // Searching
            $('#scarchbytitle').keyup(function (e) {
                e.preventDefault();
                var quary = $(this).val();
                var sort = $('#shortby').val();
                $.ajax({
                    url: "{{route('projects')}}",
                    type: 'GET',
                    dataType: "html",
                    data: {
                        search: quary,
                        sort: sort,
                    },
                    success: function( data ) {
                        $("#tag_container").empty().html(data);
                    }
                });
            });
            // Shorting
            $('#shortby').change(function (e) {
                e.preventDefault();
                var sort = $(this).val();
                var quary = $('#scarchbytitle').val();
                $.ajax({
                    url: "{{route('projects')}}",
                    type: 'GET',
                    dataType: "html",
                    data: {
                        search: quary,
                        sort: sort,
                    },
                    success: function( data ) {
                        $("#tag_container").empty().html(data);
                    }
                });
            });


        </script>
    </x-slot>
</x-app-layout>
