<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hairs;
class HairsController extends Controller
{
    public function index()
    {
        $hair = Hairs::all();
        return view('admin.hairs.index', compact('hair'));
    }

    public function viewHair()
    {
        $hair = Hairs::all();
        return view('LeLuxeAdmin.LeLuxeAdminPage.Services.hair', compact('hair'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',

        ]);

        Hairs::create($request->all());

        return redirect()->route('hairs.index')
            ->with('success', 'hair created successfully.');
    }
}
