<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       $courses = Course::with('specialty')->get();
       return view('home', compact('courses'));
   }
}
