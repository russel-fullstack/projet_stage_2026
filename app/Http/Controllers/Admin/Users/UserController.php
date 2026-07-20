<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
       $users = [
           [
               'name' => 'Marc Tisserand',
               'email' => 'm.tisserand@edumaster.com',
               'initials' => 'MT',
               'avatar_bg' => 'bg-emerald-50 text-emerald-600',
               'role' => 'instructor',
               'joined_at_formatted' => '12 Oct 2023',
               'joined_time' => '09:45',
               'is_active' => true,
               'is_online' => true,
           ],
           [
               'name' => 'Sarah Laurent',
               'email' => 's.laurent@edumaster.com',
               'initials' => 'SL',
               'avatar_bg' => 'bg-indigo-50 text-indigo-600',
               'role' => 'student',
               'joined_at_formatted' => 'Hier',
               'joined_time' => '14:20',
               'is_active' => true,
               'is_online' => false,
           ],
           [
               'name' => 'Claude Russel',
               'email' => 'c.russel@edumaster.com',
               'initials' => 'CR',
               'avatar_bg' => 'bg-[#002266] text-white',
               'role' => 'super_admin',
               'joined_at_formatted' => '01 Mars 2026',
               'joined_time' => '10:00',
               'is_active' => true,
               'is_online' => true,
           ],
           [
               'name' => 'Claude Russel',
               'email' => 'c.russel@edumaster.com',
               'initials' => 'CR',
               'avatar_bg' => 'bg-[#002266] text-white',
               'role' => '',
               'joined_at_formatted' => '01 Mars 2026',
               'joined_time' => '10:00',
               'is_active' => true,
               'is_online' => true,
           ],
           [
               'name' => 'Claude Russel',
               'email' => 'c.russel@edumaster.com',
               'initials' => 'CR',
               'avatar_bg' => 'bg-secondary text-white',
               'role' => 'instructor',
               'joined_at_formatted' => '01 Mars 2026',
               'joined_time' => '10:00',
               'is_active' => false,
               'is_online' => false,
           ]
       ];

       return view('admin.users.index', compact('users'));
   }
}
