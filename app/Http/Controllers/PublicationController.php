<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Http\Requests\StorePublicationRequest;
use App\Http\Requests\UpdatePublicationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::all();
        return view('dashboard.publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.publications.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicationRequest $request)
    {

        $publication = new Publication();
        $publication->category = $request->category;
        $publication->title = $request->title;
        $publication->journal = $request->journal;
        if ($request->volume) {
            # code...
            $publication->volume = $request->volume;
        }
        $publication->publish_date = $request->publish_date;
        $publication->authors = $request->authors;
        $publication->doi = $request->doi;

        if ($request->file) {
            $file = $request->file('file');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/publication/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $publication->file = $fileurl;
        }

        $publication->save();
        return Redirect::route('apublications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $publication = Publication::findOrFail($id);
        return view('dashboard.publications.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicationRequest $request, $id)
    {
        $publication = Publication::findOrFail($id);
        $publication->category = $request->category;
        $publication->title = $request->title;
        $publication->journal = $request->journal;
        if ($request->volume) {
            $publication->volume = $request->volume;
        }
        $publication->publish_date = $request->publish_date;
        $publication->authors = $request->authors;
        $publication->doi = $request->doi;

        if ($request->file) {
            if($publication->file) { unlink($publication->file); }

            $file = $request->file('file');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'files/publication/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);
            $publication->file = $fileurl;
        }

        $publication->save();
        return Redirect::route('apublications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $publication = Publication::findOrFail($id);
        if($publication->file) { unlink($publication->file); }
        $publication->delete();
        return Redirect::route('apublications.index')->with('status', 'Publication Deleted');
    }
}
