<?php

namespace App\Http\Controllers;
use App\Models\Slimming;
use Illuminate\Http\Request;

class SlimmingController extends Controller
{
    public function index()
    {
        $slim = Slimming::all();
        return view('admin.slimming.index', compact('slim'));
    }

    // Store the laser services in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'service' => 'required',
            'price' => 'required|numeric',
            'title' => 'required',
        ]);

        // Create a new service instance
        $service = new Slimming();
        $service->service = $validatedData['service'];
        $service->price = $validatedData['price'];
        $service->title = $validatedData['title'];

        // Save the service to the database
        $service->save();

        // Redirect back or return a response as needed
        return redirect()->back()->with('success', 'Service added successfully!');
    }
}
