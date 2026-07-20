<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
   public function index()
   {
       return view('courses.suggestion-course');
   }
}
