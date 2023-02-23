<?php

namespace App\Http\Controllers;

use App\Models\VolunteerExperience;
use App\Http\Requests\StoreVolunteerExperienceRequest;
use App\Http\Requests\UpdateVolunteerExperienceRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class VolunteerExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vexperiences = VolunteerExperience::all();
        return view('dashboard.volunteerExperiences.index', compact('vexperiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.volunteerExperiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVolunteerExperienceRequest $request)
    {
        $vexperience = new VolunteerExperience();
        $vexperience->org_name = $request->org_name;
        $vexperience->designation = $request->designation;
        $vexperience->start = $request->start;
        if ($request->end) {
            $vexperience->end = $request->end;
        }
        if ($request->logo) {
            $file = $request->file('logo');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/vexperience/logo/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $vexperience->logo = $fileurl;
        }
        $vexperience->save();

        return Redirect::route('volunteerExperiences.index');

    }


    /**
     * Display the specified resource.
     */
    public function show(VolunteerExperience $volunteerExperience): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $vexperience = VolunteerExperience::findOrFail($id);
        return view('dashboard.volunteerExperiences.edit',compact('vexperience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVolunteerExperienceRequest $request,  $id)
    {
        $vexperience = VolunteerExperience::findOrFail($id);
        $vexperience->org_name = $request->org_name;
        $vexperience->designation = $request->designation;
        $vexperience->start = $request->start;
        if ($request->end) {
            $vexperience->end = $request->end;
        }
        if ($request->logo) {
            if($vexperience->logo) { unlink($vexperience->logo); }

            $file = $request->file('logo');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/vexperience/logo/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $vexperience->logo = $fileurl;
        }
        $vexperience->save();

        return Redirect::route('volunteerExperiences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $vexperience = VolunteerExperience::findOrFail($id);
        if($vexperience->logo) { unlink($vexperience->logo); }
        $vexperience->delete();
        return Redirect::route('volunteerExperiences.index')->with('status', 'Experience Deleted');
    }
}
