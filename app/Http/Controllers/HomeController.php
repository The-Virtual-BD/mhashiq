<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\Member;
use App\Models\Project;
use App\Models\Publication;
use App\Models\VolunteerExperience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about() { return view('about'); }
    // Publications
    public function publications(Request $request) {
        $publications = Publication::orderBy('publish_date', 'DESC')->paginate(4);
        if ($request->ajax()) {
            if ($request->sort == 1) {
                $publications = Publication::orderBy('title')->where('category', 'LIKE', '%'.$request->search.'%')->paginate(4);
            } elseif ($request->sort == 2) {
                $publications = Publication::orderBy('title', 'DESC')->where('category', 'LIKE', '%'.$request->search.'%')->paginate(4);

            } elseif ($request->sort == 3) {
                $publications = Publication::orderBy('publish_date')->where('category', 'LIKE', '%'.$request->search.'%')->paginate(4);

            }elseif ($request->sort == 4) {
                $publications = Publication::orderBy('publish_date', 'DESC')->where('category', 'LIKE', '%'.$request->search.'%')->paginate(4);

            }else{
                $publications = Publication::orderBy('category')->where('category', 'LIKE', '%'.$request->search.'%')->paginate(4);
            }
            return view('layouts.pubrend', compact('publications'));
        }
        return view('publications', compact('publications'));
    }

    // Projects
    public function projects(Request $request) {
        $projects = Project::paginate(4);
        if ($request->ajax()) {
            if ($request->sort == 1) {
                $projects = Project::orderBy('title')->where('title', 'LIKE', '%'.$request->search.'%')->paginate(4);
            } elseif ($request->sort == 2) {
                $projects = Project::orderBy('title', 'DESC')->where('title', 'LIKE', '%'.$request->search.'%')->paginate(4);

            } elseif ($request->sort == 3) {
                $projects = Project::orderBy('event_date')->where('title', 'LIKE', '%'.$request->search.'%')->paginate(4);

            }else {
                $projects = Project::orderBy('event_date', 'DESC')->where('title', 'LIKE', '%'.$request->search.'%')->paginate(4);
            }
            return view('layouts.prorend', compact('projects'));
        }
        return view('projects', compact('projects'));
    }
    public function volunteerex() {
        $vexperiences = VolunteerExperience::all();
        $images = GalleryImage::paginate(8);
        return view('volunteerex',compact('vexperiences','images'));
    }
    public function colaboration() {
        $members = Member::all();

        return view('colaboration',compact('members'));
    }
    public function dashboard() { return view('dashboard.dashboard'); }
}
