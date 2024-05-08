<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\ContactMessage;
use App\Models\Nails;
use App\Models\Service;
use App\Models\Waxing;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function product(){
        return view('Admin.product');
    }


    // Appointment starts here
    

    // Appointment Ends here



    // Facial Services
    public function LeLuxeFacial(){
        $services = Service::all();
        return view('LeLuxeAdmin.LeLuxeAdminPage.Services.facial', compact('services'));
    }

    public function LeLuxeWaxing(){
        $services = Waxing::all();
        return view('LeLuxeAdmin.LeLuxeAdminPage.Services.waxing', compact('services'));
    }

    public function LeLuxeNails(){
        $services = Nails::all();
        return view('LeLuxeAdmin.LeLuxeAdminPage.Services.nail', compact('services'));
    }

    // Contact us starts here
  
    


}
