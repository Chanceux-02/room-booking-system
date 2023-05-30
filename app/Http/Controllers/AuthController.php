<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    
    public function login(Request $request){
        $validated = Validator::make($request->all(),[
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if ($validated->fails()) {
            return redirect('/login')
            ->withErrors($validated)
            ->withInput();
        }

        $credentials = $request->only('email', 'password');
        $auth = Auth::attempt($credentials);
        if (!$auth) {
            return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');
        }

        $request->session()->regenerate();
        return redirect('/')->with('message', 'Login successful!');

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('message', 'Logout successful!');
    }

    public function register(Request $request){
        
        $validate = Validator::make($request->all(),[
            "fname" => ['required', 'min:3'],
            "age" => ['required', 'max:3'],
            "contact" => ['required', 'max:11'],
            "email" => ['required', 'email'],
            "password" => ['required', 'min:6']
        ]);
        
        $checkValidate = $validate->fails();
        
        if($checkValidate){
            $errMessage = $validate->messages();
            // return view('auth.register')->with('message',$errMessage);
            return back()->withErrors($errMessage);
        }


        $fname = strip_tags($request->input('fname'));
        $age = $request->input('age');
        $contact = $request->input('contact');
        $profile_pic_img = $request->file('image');

        $uniquName = $profile_pic_img->hashName();
        $email = strip_tags($request->input('email'));
        $password = strip_tags($request->input('password'));
        
        $renameImage = str_replace(" ", "-", $fname);
        $toLowerCase = strtolower($renameImage);
        $imageName = $toLowerCase."-".$uniquName;
        $hashedPassword = Hash::make($password);
        
        $profile_pic_img->storeAs('public/profile-pics', $imageName);
        $user = new Users;
        $user->full_name = $fname;
        $user->age = $age;
        $user->image = $imageName;
        $user->contact = $contact;
        $user->email = $email;
        $user->password = $hashedPassword;
        $user->save();

        return view('auth.login')->with('message','Logged in Successful!');
    }

    public function checkLogin(){
        $check = Auth::check();
        if ($check) {
           return response()->json(['logged_in' => true]);
        } else {
           return response()->json(['logged_in' => false]);
        }
    }

}
