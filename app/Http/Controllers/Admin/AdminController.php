<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Dashboard',
            'page_title'    => 'Dashbord'
        );
        return view('user.dashboard.index')->with($data);
    }
}
