<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Waxing;
use App\Models\Nails;
use App\Models\Hairs;
use App\Models\Laser;
use App\Models\Slimming;

use App\Models\Gallery;

class HomeController extends Controller
{
    // Homepage
    public function index(){
        return view('Homepage.index');
    }
    public function contact_us(){
        return view('Homepage.contact');
    }


    // Contact us
    public function book(){
        $services = Service::all();
        return view('Homepage.appointment', compact('services'));
    }
    // Our Services & Pricing
    public function services(){
        $services = Service::all();
        $wax = Waxing::all();
        $nails = Nails::all();
        $hair = Hairs::all();
        $lasers = Laser::all();
        $slim = Slimming::all();
        return view('Homepage.services', compact('services','wax','nails','hair','lasers','slim'));
    }

    public function aboutus(){
        $galleries = Gallery::all();
        return view('Homepage.aboutus', compact('galleries'));
    }

}
