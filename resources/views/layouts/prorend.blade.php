@foreach ($projects as $project)
<div class="bg-white p-5 shadow rounded-md text-nightblue font-medium mt-5">
    <h3 class="font-medium font-quick text-base mt-2">{{$project->title}}</h3>
    <div class="flex items-center space-x-3 text-sm mt-2">
        <span>{{$project->event_date}}</span>
    </div>
    <div class="flex items-center gap-2 text-sm mt-2 text-midgray">
        <span class="iconify" data-icon="material-symbols:group-sharp"></span>
        <p class="">{{$project->volunteers}}</p>
    </div>

    <div class="flex gap-4 text-sm mt-2 text-midgray">
        @if ($project->file)

        <a href="{{$project->file}}" class="flex items-center gap-2"><span class="iconify" data-icon="bi:file-earmark-pdf"></span>View PDF</a>
        @endif
        <a href="{{$project->link}}" class="flex items-center gap-2"><span class="iconify" data-icon="material-symbols:file-present-outline"></span>{{$project->link}}</a>
    </div>
</div>
@endforeach
<div class="mt-4">
    {!! $projects->render() !!}
</div>



