<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPractice extends Controller
{
    public function navigation()
    {
        return view('Cascading Practice.navigation');
    }
   public function cards()
   {
       return view('Cascading Practice.card');
   }
   public function watch()
   {
       return view('Cascading Practice.watches');
   }



}
