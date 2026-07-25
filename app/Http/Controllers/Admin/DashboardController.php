<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $users = User::latest()->paginate(5);
        return view('dashboard.admin-dashboard', compact( 'courses', 'users'));
    }
}
