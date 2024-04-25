<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Waxing;

class WaxingController extends Controller
{
    public function index()
    {
        $wax = Waxing::all();
        return view('admin.waxing.index', compact('wax'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'female_price' => 'required|numeric',
            'male_price' => 'required|numeric',
        ]);

        Waxing::create($request->all());

        return redirect()->route('waxing.index')
            ->with('success', 'waxing created successfully.');
    }
}
