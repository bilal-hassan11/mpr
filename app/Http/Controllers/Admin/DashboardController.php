<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPackage;
use App\Models\UserProfit;
use Auth;
class DashboardController extends Controller
{
    public function index(){
        $first_day_this_month = date('Y-m-20');
        $last_day_this_month  = date('Y-m-t');
        $data = array(
            'title' => 'Dashboard',
            'page_title' => 'Dashbord',
            // 'user_status' => 'Auth::User()->user_status',
            'user_packages' => UserPackage::with(['parentPackage'])->where('user_id',Auth::user()->id)->get(),
            'user_profit'   => UserProfit::where('user_id',Auth::user()->id)->get(),
            'this_month_profit' => UserProfit::where('user_id',Auth::user()->id)->whereBetween('profit_date',[$first_day_this_month,$last_day_this_month])->get(),
            'this_year_profit'  => UserProfit::where('user_id',Auth::user()->id)->whereYear('profit_date',date('Y'))->get(),
        );
        return view('user.dashboard.index')->with($data);
    }

    public function adminLogout(Request $request){
        Auth::logout();
        return redirect('/admin');
    }
}
