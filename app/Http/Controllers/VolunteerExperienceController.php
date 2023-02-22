<?php

namespace App\Http\Controllers;

use App\Models\VolunteerExperience;
use App\Http\Requests\StoreVolunteerExperienceRequest;
use App\Http\Requests\UpdateVolunteerExperienceRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class VolunteerExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVolunteerExperienceRequest $request): RedirectResponse
    {
        //
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
    public function edit(VolunteerExperience $volunteerExperience): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVolunteerExperienceRequest $request, VolunteerExperience $volunteerExperience): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VolunteerExperience $volunteerExperience): RedirectResponse
    {
        //
    }
}
