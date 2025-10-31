<?php

namespace App\Http\Controllers;
use App\Models\Register;
use App\Models\Userdata;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserdataController extends Controller
{
    public function register(Request $request){
        $first=$request->first;
        $last=$request->last;
        $email=$request->email;
        $address=$request->address;
        $password=$request->password;
        $hashedPassword = Hash::make($password);
        $mobile=$request->mobile;

        $reg=new Register();
        $reg->first=$first;
        $reg->last=$last;
        $reg->email=$email;
        $reg->address=$address;
        $reg->password=$hashedPassword;
        $reg->mobile=$mobile;
        $reg->save();
        // dd($hashedPassword);
        // return redirect()->route('register-process')->with('success','Register Successfully');
        return redirect()->route('register')->with('success', 'Register Successfully');

    }
    public function login(Request $request){
        $first=$request->first;
        $password=$request->password;
        $data=Register::where('first',$first)->first();
        if ($data && Hash::check($password, $data->password)) {
            // dd("Login Done");
            return redirect()->route('login')->with('success', 'login Successfully');

        }else
        dd("Invalid");
        
        // $hashedPassword = Hash::make($password);
        // $reg=new Register();
        // $reg->uname=$uname;
        // $reg->password=$hashedPassword;
        // $reg->save();
        // dd($hashedPassword);
    }
}
