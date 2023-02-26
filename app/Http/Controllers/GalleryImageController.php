<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Http\Requests\StoreGalleryImageRequest;
use App\Http\Requests\UpdateGalleryImageRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
// use Intervention\Image\Facades\Image;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = GalleryImage::all();
        return view('dashboard.galleries.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryImageRequest $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('image')) {

            $galleryImage = new GalleryImage();

            $file = $request->file('image');
            $filefullname = time() . '.' . $file->getClientOriginalExtension();
            $upload_path = 'gallery/';
            $fileurl = $upload_path . $filefullname;
            $success = $file->move($upload_path, $filefullname);

            $galleryImage->photo = $fileurl;
            $galleryImage->thumbnail = $fileurl;
            $galleryImage->save();

            return Redirect::route('galleryImages.index')->with('success', 'Image Upload successful');
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(GalleryImage $galleryImage): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GalleryImage $galleryImage): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryImageRequest $request, GalleryImage $galleryImage): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image = GalleryImage::findOrFail($id);
        if ($image->photo) {
            unlink($image->photo);
        }
        $image->delete();

        return Redirect::route('galleryImages.index')->with('status', 'Image Deleted');
    }
}
