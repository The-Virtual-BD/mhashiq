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
        return view('dashboard.galleries.index',compact('images'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->hasFile('image')) {


            $file = $request->file('image');
            $filefullname = time().'.'.$file->getClientOriginalExtension();
            $upload_path = 'gallery/';
            $fileurl = $upload_path.$filefullname;
            $success = $file->move($upload_path, $filefullname);

            /**
             * Generate Thumbnail Image Upload on Folder Code
             */
            // $image = Image::make($request->file('image'));
            // $thumbimage = $image->resize(100,100);

            // $thumbuploadpath = 'gallery/thumbnail/';
            // $fileurl = $thumbuploadpath.$filefullname;

            // $image->save($destinationPathThumbnail.$imageName);

            // $file = $request->file('file');
            // $filefullname = time().'.'.$file->getClientOriginalExtension();
            // $upload_path = 'gallery/thumbnail/';
            // $fileurl = $upload_path.$filefullname;
            // $success = $file->move($upload_path, $filefullname);

            // $success = $image->move($destinationPath, $imageName);


            /**
             * Write Code for Image Upload Here,
             */

            $galleryImage = new GalleryImage();
            $galleryImage->photo = $fileurl;
            $galleryImage->thumbnail = $fileurl;
            $galleryImage->save();

            return Redirect::route('galleryImages.index')->with('success','Image Upload successful');
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
    public function destroy(GalleryImage $galleryImage): RedirectResponse
    {
        //
    }
}