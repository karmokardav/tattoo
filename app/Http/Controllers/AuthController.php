<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;
use Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showLogin()
    {
        return view("auth.login");
    }

    public function login_action(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $email = $request->email;
        $password = $request->password;

        $existUser = User::where('email', $email)->first(); // retrieve user with email

        if (!$existUser) {
            return redirect()->back()->withErrors([
                'email' => 'User Not Found'
            ])->withInput();
        }

        if (!auth()->attempt(['email' => $email, 'password' => $password])) {
            return back()->withInput()->withErrors([
                'password' => 'Invalid Credentials'
            ]);
        }

        return redirect()->route('home')->with('success', 'Signin Successfully!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

// register****************************************
    public function showRegister()
    {
        return view("auth.register");
    }
    public function register_action(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $existUser = User::where('email', $email)->first(); // retrieve user with email

        if ($existUser) {
            return redirect()->back()->withErrors([
                'email' => 'User Aleady exist'
            ])->withInput();
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)

        // ]);


        return redirect()->route('login')->with('success', 'Sign Up successfull!');
    }
}
