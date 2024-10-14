<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showDashboard()
    {
        return view('admin.dashboard');
    }
    public function showUsers()
    {
        return view('admin.users');
    }
    public function showReviews()
    {
        return view('admin.reviews');
    }
    public function showAppointments()
    {
        return view('admin.appointments');
    }
    public function showForgot()
    {
        return view('admin.forgot');
    }
    public function showNew()
    {
        return view('admin.new');
    }
    public function showLogin()
    {
        return view('admin.login');
    }
    public function showReset()
    {
        return view('admin.sms');
    }
}
