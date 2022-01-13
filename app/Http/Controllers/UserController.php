<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
}
