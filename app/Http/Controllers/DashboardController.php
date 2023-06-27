<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        return view('dashboard.profile', ['user' => $user]);
    }

    public function profile()
    {
        $user = Auth::user();

        return view('dashboard.profile', ['user' => $user]);
    }

    public function loans()
    {
        $user = Auth::user();

        return view('dashboard.loans', ['user' => $user]);
    }

    public function reports()
    {
        $user = Auth::user();

        return view('dashboard.reports', ['user' => $user]);
    }

    public function settings()
    {
        $user = Auth::user();

        return view('dashboard.settings', ['user' => $user]);
    }

}
