<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }


    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
       //validation  validate() comes with Controller
       $this->validate($request, [
           'name'=> 'required|max:255',
           'username'=> 'required|max:255',
           'email'=> 'required|email|max:255',
           'password'=> 'required|confirmed'
       ]);

       // store user
       User::create([
          'name' => $request->name,
          'username' => $request->username,
          'email' => $request->email,
          'password' => Hash::make($request->password),
       ]);

       //sign in    can use the auth() method to grad the current authenticated user
          //auth()->user() will return the current sigend in user model
          auth()->attempt($request->only('email', 'password'));


       return redirect()->route('dashboard');
       
       
       
    }
}
