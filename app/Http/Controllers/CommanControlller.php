<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommanControlller extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function parent()
    {
        return view('parent.dashboard');
    }

    public function teacher()
    {
        return view('teacher.dashboard');
    }

    public function student(){
        return view('student.dashboard');
    }
}
