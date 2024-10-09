<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function dashboard()
    {
        // Logika untuk dashboard manager
        return view('manager.dashboard');
    }
}
