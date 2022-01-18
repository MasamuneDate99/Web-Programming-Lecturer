<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerPage() {
        return view('register');
    }

    public function insertUser(Request $request) {
        $rules = [
            'Name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confPassword' => 'required|same:password',
            'agreement' => 'required'
        ];

        $validation = Validator::make($request->all(), $rules);

        if($validation->fails()) {
            return back()->withErrors($validation, 'insert');
        }

        $user = new User();
        $user->name = $request->Name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }

    public function loginPage(){
        return view('login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/home');
    }

    public function loginUser(Request $req){
        $credentials = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if($req->remember){
            Cookie::queue('email', $req->email, 1);
            Cookie::queue('password', $req->password, 1);
        }
    
        if (Auth::attempt($credentials, true)) {
            Session::put('credential', $credentials);
            // Return redirect ke "Home" page nantinya
            return redirect()->intended('home');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
