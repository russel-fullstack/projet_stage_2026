<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashController extends Controller
{
    public function index()
    {
        return view('dashboard.user-dashboard');
    }
    public function chapiter()
    {
        return view('users.courses.index');
    }
    public function certified()
    {
        return view('users.certifications.index');
    }
}
