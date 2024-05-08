<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.index', compact('testimonials'));
    }

    public function viewTestimony()
    {
        $testimonials = Testimonial::all();
        return view('LeLuxeAdmin.LeLuxeAdminPage.testimony', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $testimonial = Testimonial::create($validatedData);
        return redirect()->back()->with('success', 'Testimonial created successfully');
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('testimonials.show', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($validatedData);

        return redirect()->back()->with('success', 'Testimonial updated successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimonial deleted successfully');
    }
}
