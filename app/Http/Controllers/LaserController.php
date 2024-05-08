<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laser;
class LaserController extends Controller
{
    // Show the view with the modal for adding laser services
    public function index()
    {
        $lasers = Laser::all();
        return view('admin.laser.index', compact('lasers'));
    }

    public function viewLaser()
    {
        $service = Laser::all();
        return view('LeLuxeAdmin.LeLuxeAdminPage.Services.laser', compact('service'));
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
        $service = new Laser();
        $service->service = $validatedData['service'];
        $service->price = $validatedData['price'];
        $service->title = $validatedData['title'];

        // Save the service to the database
        $service->save();

        // Redirect back or return a response as needed
        return redirect()->back()->with('success', 'Service added successfully!');
    }
}
