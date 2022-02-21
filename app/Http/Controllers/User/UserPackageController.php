<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserPackage;

class UserPackageController extends Controller
{
    public function buyPackage(){
        dd('done');
    }

    public function viewPackage(){
        $data = array(
            'title' => 'User Packages',
            'user_packages' => UserPackage::with(['parentPackage'])->where('user_id',Auth::user()->id)->get(),
        );
        return view('user.user_package.view_package')->with($data);
    }
}
