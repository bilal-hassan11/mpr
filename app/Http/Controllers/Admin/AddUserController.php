<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\User;

class AddUserController extends Controller
{
    public function addUser(){
        
        $data = array(
            'title' => 'Add User',
            'page_title'    => 'User'
        );
        return view('admin.user.add_user')->with($data);
    }

    //update and store user
    public function store(Request $req){
        
        $rules = [
            'user_name'         => ['required','max:255'],
            'email'             => ['required','max:255','unique:users'],
            'password'          => ['required','max:255'],
            'referal_id'        => ['nullable'],
            'user_status'       => ['required','in:user,admin'],
            'account_status'    => ['required','in:enable,disable'],
            'phone_no'          => ['required','max:50']
        ];
        
        $validator = Validator::make($req->all(),$rules);

        if($validator->fails()){
            return ['errors'    => $validator->errors()];
        }

        $user = new User;
        $user->referal_id = Str::random(10);
        $user->username = $req->user_name;
        $user->email = $req->user_name;
        $user->password = \Hash::make($req->password);
        $user->phone_no = $req->phone_no;
        $user->referance_id = $req->referance_id;
        $user->user_status = $req->user_status;
        $user->account_status = $req->account_status;
        $user->save();

        return respones()->json([
            'success'   => 'User Added Successfully',
            'reload'    => TRUE
        ]);
        
    }

    //view users
    public function viewUser(){
        $data = array(
            'title' => 'View User',
            'page_title'    =>'User',
            'users' => User::get(),
        );
        return view('admin.user.view_user')->with($data);  
    }

    //update account status 
    public function updateAccountStatus($id,$status){
    
        if($status == 'enable' || $status == 'disable'){
            if(isset($id) && !empty($id)){
                if(User::where('id',base64_decode($id))->exists()){
                    User::where('id',base64_decode($id))->update(['account_status'=>$status]);

                    return response()->json([
                        'success'   => 'User Status Updated Successfully',
                        'reload'    => TRUE
                    ]);
                }
            }
        }
        dd('erro');
        abort(404);
    }

    //eduit user
    public function editUser($id){
        if(isset($id) && !empty($id)){
            if(User::where('id',base64_decode($id))->exists()){
                $data = array(
                    'title' => 'Edit User',
                    'page_title'    => 'User',
                    'edit'  => TRUE,
                    'edit_user' => User::where('id',base64_decode($id))->first(),
                );
                return view('admin.user.add_user')->with($data);
            }
        }
    }

    //delete user
    public function deleteUser($id){
        if(isset($id) && !empty($id)){
            if(User::where('id',base64_decode($id))->exists()){
                User::where('id',base64_decode($id))->delete();

                return response()->json([
                    'success'   => "User Deleted Successfully",
                    'reload'    => TRUE,
                ]);
            }
        }
        abort(404);
    }
}
