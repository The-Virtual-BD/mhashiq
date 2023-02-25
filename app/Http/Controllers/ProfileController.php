<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request,User $user)
    {

        if ($request->first_name) {$user->first_name = $request->first_name;}
        if ($request->last_name) {$user->last_name = $request->last_name;}
        if ($request->designation) {$user->designation = $request->designation;}
        if ($request->orcid_id) {$user->orcid_id = $request->orcid_id;}
        if ($request->bio) {$user->bio = $request->bio;}
        if ($request->bio_mini) {$user->bio_mini = $request->bio_mini;}
        if ($request->phone) {$user->phone = $request->phone;}
        if ($request->address) {$user->address = $request->address;}
        if ($request->facebook) {$user->facebook = $request->facebook;}
        if ($request->instagram) {$user->instagram = $request->instagram;}
        if ($request->linkedin) {$user->linkedin = $request->linkedin;}
        if ($request->research_gate) {$user->research_gate = $request->research_gate;}
        if ($request->google_scolar) {$user->google_scolar = $request->google_scolar;}


        if ($request->aca_position) {
            $user->aca_position = $request->aca_position;
        }else{
            $user->aca_position = Null;
        }
        if ($request->job_position) {
            $user->job_position = $request->job_position;
        }else{
            $user->job_position = Null;
        }
        if ($request->degrees) {
            $user->degrees = $request->degrees;
        }else{
            $user->degrees = Null;
        }


        // Extras
        if ($request->extra_one) {$user->extra_one = $request->extra_one;}
        if ($request->extra_two) {$user->extra_two = $request->extra_two;}
        if ($request->extra_three) {$user->extra_three = $request->extra_three;}

        if ($request->file('cv')) {
            // Delete old cv if have
            if($user->cv) { unlink($user->cv); }
            $file = $request->file('cv');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/cv/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $user->cv = $fileurl;
        }

        if ($request->email) {
            $user->email = $request->email;

            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function profilePicture(Request $request, User $user)
    {

        if ($request->file('photo')) {
            // Delete old photo if have
            if($user->photo) { unlink($user->photo); }
            $file = $request->file('photo');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/photo/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $user->photo = $fileurl;
        }
        $user->save();

        return Redirect::route('profile.edit')->with('status', 'Photo Updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
