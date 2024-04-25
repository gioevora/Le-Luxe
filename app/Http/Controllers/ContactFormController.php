<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{
    public function index()
    {
        $contacts = ContactMessage::all();
        return view('Admin.contact.index', compact('contacts'));
    }

    public function submitForm(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Create a new ContactMessage record
        ContactMessage::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function accept($id)
    {
        try {
            // Find the contact by its ID
            $contact = ContactMessage::findOrFail($id);

            // Update the status of the contact to "Accepted"
            $contact->update(['status' => 'Accepted']);

            // Send email notification to the contact owner
            $message = "Good Day! MR/MS " . $contact->first_name . " " . $contact->last_name . ", Thank you for reaching out to us through our website. We have received your message and appreciate your interest in contacting us. Our team will review your inquiry and get back to you as soon as possible. If you have any further questions or require immediate assistance, please feel free to contact us again. Once again, thank you for reaching out!";

            Mail::to($contact->email)->send(new Contact($contact, $message));

            return redirect()->back()->with('success', 'Contact message accepted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while accepting contact message: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to accept contact message.');
        }
    }
}
