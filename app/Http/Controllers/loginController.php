<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function login(){

        $data = array(
            'title' => 'Login',
           
        );
        return view('user.dashboard.login')->with($data);
    }

    function check(Request $request){

         $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email does not exists !'
         ]);

         $creds = $request->only('email','password');
         
         
         if( Auth::guard('web')->attempt($creds) ){

            if(Auth::user()->user_status == 'admin'){
                return redirect()->route('admin.index');
            }else{
                 return redirect()->route('users.dashboard');
            }
         }else{
             return redirect()->route('admin.login')->with('fail','You have to Provide Correct Email & Password!');
         }
    }

    public function dashboard(){
        
        $data = array(
            
            'users_data' => User::where()->get(),
            'user'=>  DB::table('users')->orderBy('id','desc')->count(),
            
        );
        
        return view('admin.home')->with($data);
    }

    public function logout(Request $request){
    
        // // Auth::guard('web')->logout();
        // Auth::logout();
        // return redirect()->route('admin.login');
        if(Auth::user()->user_status == 'admin'){
            Auth::logout();
            return redirect()->route('admin.login');
        }else{
            Auth::logout();
            return redirect()->route('users.login');
        }
    }


}
