<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function index(){

        return view('Admin.Login');
    }

    public function login(){

    try{

    
        $validate = request()->validate([

            'email' => ['required','email',Rule::exists('users','email')],
            'password' => 'required'

        ]);

        if(Hash::check($validate['password'],User::first()->password)){
           auth()->attempt($validate);
           return redirect('/admin/dashboard');
        }else{

            return back()->with('error','Email or Password are incorrect.');

        }
    
    }catch(\Exception  $e){

        return back()->with('error',$e->getMessage());
    }


    }
}
