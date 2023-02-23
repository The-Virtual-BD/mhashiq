@foreach ($publications as $publication)
    <div class="bg-white p-5 shadow rounded-md text-nightblue font-medium mt-5">
        <div class="flex justify-between">

            <p class="uppercase text-xs">{{ $publication->category }}</p>
        </div>
        <h3 class="font-medium font-quick text-base mt-2">{{ $publication->title }}</h3>
        <div class="flex items-center space-x-3 text-sm mt-2">
            <span>{{ $publication->publish_date }}</span>
            <span class="iconify" data-icon="octicon:dot-fill-24"></span>
            <span>{{ $publication->journal }}</span>
            <span>{{ $publication->volume }}</span>
        </div>
        <div class="flex items-center gap-2 text-sm mt-2 text-midgray">
            <span class="iconify" data-icon="material-symbols:group-sharp"></span>
            <p class="">{{ $publication->authors }}</p>
        </div>

        <div class="flex gap-4 text-sm mt-2 text-midgray">
            <a href="{{ $publication->file }}" class="flex items-center gap-2"><span class="iconify"
                    data-icon="bi:file-earmark-pdf"></span>View PDF</a>
            <a href="https://www.doi.org/{{ $publication->doi }}" class="flex items-center gap-2"><span
                    class="iconify text-yellow-500" data-icon="academicons:doi"></span>{{ $publication->doi }}</a>
        </div>
    </div>
@endforeach
<div class="mt-4">
    {!! $publications->render() !!}
</div>
