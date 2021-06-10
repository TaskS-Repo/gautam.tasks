<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Student;

use Yajra\DataTables\Facades\DataTables;

class DatatableController extends Controller
{
    public function index(){
        $user=User::all();
        return view('Datatable.usermodule',compact('user'));
    }

    public function getuser(){
         $datas=Student::select('*');
        return DataTables::of($datas)
        ->make(true);

    }

}
