<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }

    public function registerUser(Request $request){
        $request -> validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'mobileno'=>'required | min:10 | max:10 ',
            'email'=>'required | email | unique:users',
            'password'=>'required | min:5 | max:12' 
        ]);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->mobileno = $request->mobileno;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return back()->with('success','You have  registered Successfully');
        }
        else{
            return back()->with('fail','Something Wrong');
        }
    }

    public function loginUser(Request $request){
        $request -> validate([
            'email'=> 'required | email',
            'password'=> 'required | min:5 | max:12'
        ]);
        $user=User::where('email','=',$request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','Password not matches.');
            }
        }
        else{
            return back()->with('fail','Email is not registered.');
        }
    }

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        return view('auth.dashboard',compact('data')); 
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
