<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    //
    function home(){
        return view('home');
    }

    function loginForm(){
        return view('loginForm');
    }

    function registerForm(){
        return view('registerForm');
    }

    function registerProcess(Request $request){
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone_number' => 'required',
            'nim' => 'required',
            'major' => 'required',
        ]);
        
        $user = new Student();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->nim = $request->nim;
        $user->major = $request->major;
        $user->password = $request->password;
        $user->save();


        return redirect('/loginForm')->with('Sucess', 'Registrasi Berhasil');
    }

    function loginProcess(Request $request){
           //
        // $email = $request->email;
        // $password = $request->password;
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = Student::where('email',$request->email)
                        ->where('password',$request->password)
                        ->first();
        
        if(Auth::attempt($credentials, $request->boolean('remember'))){
            session([
                'user_id' => $user->id,
                'user_name' => $user->name
            ]);
            // $request->session()->regenerate();
            return redirect('/home');
        } else if($user){
            //
            session([
                'user_id' => $user->id,
                'user_name' => $user->name
            ]);
            // $request->session()->regenerate();
            return redirect('/home');
        }   
        // }else if(Auth::attempt(['email' => $email,'password' => $password])){
        //     //
        //     // $request->session()->regenerate();
        //     return redirect('/home');
        // }


        return redirect('/loginForm');

    }
    function logoutProcess(){
        Auth::logout();
        session()->flush();
        return redirect('/loginForm');
    }
}
