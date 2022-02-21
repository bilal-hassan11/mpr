<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\User;

class PaymentController extends Controller
{
    public function cashbox(){

        $data = [
            'title' => "Cash Box",
        ];

        return view('user.dashboard.cashbox');
    }

    public function deposite(){

        $data = [
            'title' => "Cash Box",
        ];

        return view('user.dashboard.deposite');
    }

    public function profit(){

        $data = [
            'title' => "Cash Box",
        ];

        return view('user.dashboard.profit');
    }
}
