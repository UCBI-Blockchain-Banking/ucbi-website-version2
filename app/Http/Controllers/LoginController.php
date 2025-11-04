<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){

            $notification = array(
                'msg' =>'you are already loggedin',
                'type' =>'success',
            );
            return redirect()->route('myadmin')->with($notification);
        }
        return view('frontend.login');
    }

    //login request
    public function submitLogin( Request $request){
        $rules =[
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ];
        $request->validate($rules);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $notification = array(
                'msg' =>'Login Success',
                'type' =>'success',
            );

            return redirect()->route('myadmin')->with($notification);
        }else{
            $notification = array(
                'msg' =>'Login Error',
                'type' =>'danger',
            );
            return redirect()->back()->with($notification);
        }
    }
    public function signup(){
        return view('frontend.signup');
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ];
        $request->validate($rules);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->password = Hash::make($request->password);
        $users->save();

        $notification = array(
            'msg' =>'User created Successfully',
            'type' =>'success',
        );
        return redirect()->back()->with($notification);
    }

    //logout
    public function submitLogout(){
        if(Auth::check()){
            Auth::logout();

            $notification = array(
                'msg' =>'Logout success',
                'type' =>'success',
            );
            return redirect()->route('homepage')->with($notification);
        }else{
            $notification = array(
                'msg' =>'you are not logout',
                'type' =>'danger',
            );
            return redirect()->route('admin.login')->with($notification);
        }
    }


}
