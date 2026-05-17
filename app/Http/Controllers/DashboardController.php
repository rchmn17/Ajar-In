<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('instructor.dashboard_jadwal');
    }

    public function calendar()
    {
        return view('instructor.dashboard_calendar');
    }

    public function progress()
    {
        return view('instructor.dashboard_progress');
    }
}
