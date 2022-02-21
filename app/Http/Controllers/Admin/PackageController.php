<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Package;

class PackageController extends Controller
{
    public function addPackage(){
        $data = array(
            'title' => 'Add Package',
            'page_title'    => 'Package'
        );
        return view('admin.package.add_package')->with($data);
    }

    //update and store function
    public function store(Request $req){
        
        $rules = [
            'package_title'         => ['required', 'string'],
            'min_investment_amount' => ['required', 'integer'],
            'max_investment_amount' => ['required', 'integer'],
            'comission_level'       => ['required', 'integer'],
            'activation_charges'    => ['required', 'integer']
        ];

        $validator = Validator::make($req->all(),$rules);

        if($validator->fails()){
            return ['errors'    => $validator->errors()];
        }

        $package = new Package;
        $package->package_title = $req->package_title;
        $package->min_investment_amount = $req->min_investment_amount;
        $package->max_investment_amount = $req->max_investment_amount;
        $package->comission_level = $req->comission_level;
        $package->activation_charges = $req->activation_charges;
        $package->save();

        return response()->json([
            'success'   => 'Package Added Successfully',
            'reload'    => TRUE,
        ]);
    }

    public function viewPackage(){

        $data = [
            'title' => "View Packages",
            'packages' => Package::get(),
        ];

        return view('admin.package.view_package')->with($data);

    } 
}
