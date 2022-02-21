<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){
    
        $data = array(
            'title' => 'Dashboard',
            'page_title' => 'Dashbord',
            'user_status' => 'Auth::User()->user_status'
        );
        return view('user.dashboard.index')->with($data);
    }

    public function profile(){
        
        $data = array(
            'title' => 'Dashboard',
            'page_title'    => 'Dashbord'
        );
        return view('user.dashboard.profile')->with($data);
    }
}
