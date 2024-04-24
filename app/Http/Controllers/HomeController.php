<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Homepage
    public function index(){
        return view('Homepage.index');
    }

    // Our Services & Pricing
    public function services(){
        return view('Homepage.services');
    }

    // Contact us
    public function contact_us(){
        return view('homepage.contact');
    }

    // Book an appointment
    public function book(){
        return view('Homepage.appointment');
    }
       
    
}
