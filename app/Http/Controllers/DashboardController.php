<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //This method will show dashboard page for customer
    public function dashboard()
    {
        return view('dashboard');
    }
}
