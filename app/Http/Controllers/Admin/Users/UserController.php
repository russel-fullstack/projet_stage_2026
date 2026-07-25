<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
       $users = User::latest()->paginate(5);
       $courses = Course::all();
       return view('admin.users.index', compact('users', 'courses'));
   }
   public function create()
   {
       return view('admin.users.user-create');
   }
}
