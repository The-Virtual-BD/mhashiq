<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Publication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->event_date = $request->event_date;
        $project->volunteers = $request->volunteers;
        $project->link = $request->link;

        if ($request->file) {
            $file = $request->file('file');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/project/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $project->file = $fileurl;
        }

        $project->save();
        return Redirect::route('aprojects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->title = $request->title;
        $project->event_date = $request->event_date;
        $project->volunteers = $request->volunteers;
        $project->link = $request->link;

        if ($request->file) {
            if($project->file) { unlink($project->file); }

            $file = $request->file('file');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/project/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $project->file = $fileurl;
        }

        $project->save();
        return Redirect::route('aprojects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if($project->file) { unlink($project->file); }
        $project->delete();
        return Redirect::route('aprojects.index')->with('status', 'Project Deleted');
    }
}
