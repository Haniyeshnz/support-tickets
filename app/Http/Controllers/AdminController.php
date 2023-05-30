<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // use AuthenticatesUsers;
    // public function __construct(){
    //     $this->middleware('guest:web');
    //     // $this->middleware('guest:admin');
    
    // }
   
    public function AdminDashboard(){
        return view('dashboard');
    }
}
