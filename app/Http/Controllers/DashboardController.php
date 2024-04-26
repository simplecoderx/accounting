<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superAdminDashboard(){
        //return view('superAdminDashboard');
        return response("Hello, this is super admin dashboard");
    }

    public function adminDashboard(){
        return view('adminDashboard');
    }

    public function generalUserDashboard(){
        return view('generalUserDashboard');
    }
}
