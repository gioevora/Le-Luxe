<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){
        $booking = Booking::all();
        return view('Admin.booking.index', compact('booking'));
    }

    public function store(Request $request)
{
    // Validate incoming request
    $request->validate([
        'fullname' => 'required|string',
        'email' => 'required|email',
        'contact' => 'required|string',
        'date' => 'required|date',
        'time' => 'required',
        'fax' => 'required',
        'services' => 'required|string',
        'message' => 'required|string',
    ]);

    // Store request data in the database
    $requestData = $request->only(['fullname', 'email', 'contact', 'date', 'time', 'fax', 'message']);

    // Strip AM/PM indication and store time
    $time = date('H:i:s', strtotime($request->input('time')));
    $requestData['time'] = $time;

    // Store the rest of the request data
    $requestData['services'] = $request->input('services');

    // Create a new booking record
    Booking::create($requestData);

    // Redirect back to the previous page
    return redirect()->back()->with('success', 'Request submitted successfully');
}


}
