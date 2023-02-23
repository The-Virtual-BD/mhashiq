<x-app-layout>
    {{-- Bio --}}
    @if ($profile->bio)
        <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5">
            <div class="flex">
                <h2 class="font-medium font-mont text-nightblue text-base">BIO</h2>
                <h1 class="invisible">About</h1>
            </div>
            <div class="text-midgray font-medium mt-5" id="biotext">{!! $profile->bio !!}</div>
        </div>
    @endif

    {{-- Academic Positions --}}
    @if ($profile->aca_position)
        <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5 mt-5">
            <div class="flex">
                <h2 class="font-medium font-mont text-nightblue text-base uppercase">ACADEMIC POSITIONS</h2>
            </div>
            <div class="text-midgray font-medium mt-5" id="aptext">{!! $profile->aca_position !!}</div>
        </div>
    @endif

    {{-- Job position --}}
    @if ($profile->job_position)
        <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5 mt-5">
            <div class="flex">
                <h2 class="font-medium font-mont text-nightblue text-base uppercase">Job position</h2>
            </div>
            <div class="text-midgray font-medium mt-5" id="jptext">{!! $profile->job_position !!}</div>
        </div>
    @endif


    {{-- Degrees --}}
    @if ($profile->degrees)
        <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg font-quick p-5 mt-5">
            <div class="flex">
                <h2 class="font-medium font-mont text-nightblue text-base uppercase">Degrees</h2>
            </div>
            <div class="text-midgray font-medium mt-5" id="degreetext">{!! $profile->degrees !!}</div>
        </div>
    @endif

    <x-slot name="script">
        <script>
            $('ul,ol').addClass('list-square pl-4');
        </script>
    </x-slot>
</x-app-layout>
