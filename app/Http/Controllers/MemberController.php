<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $members = Member::all();
        return view('dashboard.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->designation = $request->designation;
        $member->bio = $request->bio;

        if ($request->photo) {
            $file = $request->file('photo');
            $filefullname = time() . '.' . $file->getClientOriginalExtension();
            $upload_path = 'images/members/';
            $fileurl = $upload_path . $filefullname;
            $success = $file->move($upload_path, $filefullname);
            $member->photo = $fileurl;
        }

        $member->save();

        return Redirect::route('members.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member):View
    {
        return view('dashboard.members.edit',compact('member'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->name = $request->name;
        $member->designation = $request->designation;
        $member->bio = $request->bio;

        if ($request->photo) {
            $file = $request->file('photo');
            if($member->photo) { unlink($member->photo); }

            $filefullname = time() . '.' . $file->getClientOriginalExtension();
            $upload_path = 'images/members/';
            $fileurl = $upload_path . $filefullname;
            $success = $file->move($upload_path, $filefullname);
            $member->photo = $fileurl;
        }

        $member->save();

        return Redirect::route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $member = Member::findOrFail($id);
        if($member->photo) { unlink($member->photo); }
        $member->delete();
        return Redirect::route('members.index')->with('status', 'Member Deleted');
    }
}
