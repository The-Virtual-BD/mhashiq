<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about() { return view('about'); }
    public function publications() { return view('publications'); }
    public function projects() { return view('projects'); }
    public function volunteerex() { return view('volunteerex'); }
    public function colaboration() { return view('colaboration'); }
    public function dashboard() { return view('dashboard.dashboard'); }
}
