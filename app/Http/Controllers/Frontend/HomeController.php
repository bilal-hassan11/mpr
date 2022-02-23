<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
    public function index(){
        $data = array(
            'title'  =>  'Home',
            'packages'  => Package::get(),  
        );

        return view('frontend.index')->with($data);
    }

    public function about(){
        $data = array(
            'title'  => 'About',
        );
        return view('frontend.about')->with($data);;
    }

    public function contact(){
        $data = array(
            'title'  =>   'Contact'  
        );
        return view('frontend.contact')->with($data);;
    }

    public function faq(){
        $data = array(
            'title'  => 'Faq'  
        );
        return view('frontend.faq')->with($data);;
    }

    public function investment(){
        $data = array(
            'title'  => 'Investment',
            'packages'  => Package::get(),    
        );
        return view('frontend.investment')->with($data);;
    }

    public function login(){
        $data = array(
            'title'  => 'Login'  
        );
        return view('frontend.login')->with($data);;
    }

    public function referral(){
        $data = array(
            'title'  => 'Referral'  
        );
        return view('frontend.referrals')->with($data);;
    }

    public function register(){
        $data = array(
            'register'  =>  'Register'  
        );
        return view('frontend.register')->with($data);;
    }
}