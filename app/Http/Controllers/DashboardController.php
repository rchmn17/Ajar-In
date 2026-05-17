<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function schedule()
    {
        return view('instructor.dashboard_jadwal', compact('sessions'));
    }

    public function calendar()
    {
        return view('instructor.dashboard_calendar', compact('sessions'));
    }

    public function progress()
    {
        return view('instructor.dashboard_progress', compact('sessions'));
    }
}
