<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Log;
class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('Admin.appointment.index', compact('appointments'));
    }

    public function LeLuxeAppointment(){
        $appointments = Appointment::all();
        return view('LeLuxeAdmin.LeLuxeAdminPage.appointment', compact('appointments'));
    }

    public function viewAppointment($id){
        $appointments = Appointment::find($id);
        return view('LeLuxeAdmin.LeLuxeAdminPage.view-appointment', compact('appointments'));
    }


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'e_mail' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'pax' => 'required|integer',
            'service' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Check if maximum bookings limit is reached
        if (Appointment::whereDate('date', $validatedData['date'])->count() >= 5) {
            return redirect()->back()->with('error', 'Maximum bookings reached for this date. PLease Choose another date');
        }

        // Create a new appointment instance
        $appointment = new Appointment();
        $appointment->fname = $validatedData['fname'];
        $appointment->lname = $validatedData['lname'];
        $appointment->address = $validatedData['address'];
        $appointment->mobile = $validatedData['mobile'];
        $appointment->e_mail = $validatedData['e_mail'];
        $appointment->date = $validatedData['date'];
        $appointment->time = $validatedData['time'];
        $appointment->pax = $validatedData['pax'];
        $appointment->service = $validatedData['service'];

        // Save the appointment to the database
        $appointment->save();

        // Redirect to a success page or return JSON response
        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function accept($id)
    {
        try {
            // Find the appointment by its ID
            $appointment = Appointment::findOrFail($id);

            // Update the status of the appointment to "Accepted"
            $appointment->update(['status' => 'Accepted']);

            // Send email notification to the appointment owner
            $message = "Good Day! MR/MS " . $appointment->fname . " " . $appointment->lname . ",\n\nThank you for booking with us!\n\nWe're excited to confirm your appointment. Our team is looking forward to providing you with a fantastic experience.\n\nPlease note that payment will be required upon arriving for your appointment.\n\nIf you have any special requests or need to make changes to your booking, please don't hesitate to contact us.\n\nWe appreciate your trust in us and can't wait to see you soon!";


            Mail::to($appointment->e_mail)->send(new AppointmentMail($appointment, $message));

            return redirect()->back()->with('success', 'Appointment accepted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while accepting appointment: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to accept appointment.');
        }
    }


}
