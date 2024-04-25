<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nails;

class NailsController extends Controller
{
    public function index()
    {
        $nails = Nails::all();
        return view('admin.nails.index', compact('nails'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'service' => 'array', // Removed 'required' rule
            'service.*' => 'string',
        ]);

        $nails = new Nails();

        $nails->title = $request->title;
        $nails->price = $request->price;

        // Combine selected services into a single string if any services are selected
        if ($request->has('service')) {
            $services = implode(', ', $request->service);
            $nails->service = $services;
        }

        $nails->save();

        return redirect()->route('nails.index')->with('success', 'Services added successfully.');
    }
    public function update(Request $request, Nails $nail)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'service' => 'array',
            'service.*' => 'string',
        ]);

        $nail->title = $request->title;
        $nail->price = $request->price;

        // Combine selected services into a single string if any services are selected
        if ($request->has('service')) {
            $services = implode(', ', $request->service);
            $nail->service = $services;
        }

        $nail->save();

        return redirect()->route('nails.index')->with('success', 'Nail updated successfully.');
    }
}
