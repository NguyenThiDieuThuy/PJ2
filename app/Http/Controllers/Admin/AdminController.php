<?php

namespace App\Http\Controllers\Admin;
use App\Models\AdminModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
  
    {
        $this->middleware('auth.admin');
    }
   
       

    
    function index(){
        return view('admin.home');
    }
    
}
