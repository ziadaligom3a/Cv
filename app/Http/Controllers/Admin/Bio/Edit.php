<?php

namespace App\Http\Controllers\Admin\Bio;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use Illuminate\Http\Request;

class Edit extends Controller
{
    public function index(){

        return view('Admin.Bio.Edit',[

            'bios' => Bio::all()
        ]);
    }

    public function edit(){

    try{


        $validate = request()->validate([

            'name' => 'required',
            'img' => 'required|url',
            'brief' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'LANGUAGE' => 'required'
        ]);


        Bio::first()->update($validate);
        return back();

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }

    }
}
