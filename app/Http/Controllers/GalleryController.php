<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image_path' => 'required|image|max:20480',
        ]);

        // Handle file upload
        if ($request->hasFile('image_path')) {
            $imageName = time().'.'.$request->file('image_path')->extension();
            $request->file('image_path')->move(public_path('images'), $imageName);

            // Create a new Gallery instance
            $gallery = new Gallery();
            $gallery->image_path = $imageName;
            $gallery->save();

            // Redirect back or to a specific route
            return redirect()->back()->with('success', 'Gallery created successfully');
        } else {
            return redirect()->back()->with('error', 'No image uploaded.');
        }
    }

}




