<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // This method show dashboard page for admin
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
