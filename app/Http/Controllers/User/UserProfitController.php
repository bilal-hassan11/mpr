<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserProfit;
use App\Models\UserPackage;

class UserProfitController extends Controller
{
    public function viewProfit(){
        //dd(Auth::User()->username);
        $user_package = UserPackage::where('user_id',Auth::User()->id)->where('status','active')->get();
        
        foreach($user_package AS $package){
            if(UserProfit::where('user_id',Auth::user()->id)->where('user_package_id',$package->id)->doesntExist()){
                $profit = new UserProfit;
                $profit->user_id = Auth::user()->id;
                $profit->user_package_id = $package->id;
                $profit->profit_amount = (($package->investment_amount * 3)/100);
                $profit->profit_percentage = 3;
                $profit->profit_date = date('Y-m-d');
                $profit->save();
            }
        }

        $data = array(
            'title' => 'View Profit',
            'user_package'  => UserPackage::with(['childProfit','parentPackage'])->where('user_id',Auth::user()->id)->get(),  
        );


        return view('user.user_profit.view_profit')->with($data);
    }
}
