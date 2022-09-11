<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skills as ModelsSkills;
use Illuminate\Http\Request;

class Skills extends Controller
{
    public function show(){

        return view('Admin.Skills.show',[

            'skills' => ModelsSkills::all()
        ]);

    }

    public function edit_show(ModelsSkills $id){


        return view('Admin.Skills.edit',[

            'skill' => $id
        ]);
    }

    public function edit(){

    try{


        $validate = request()->validate([

            'name' => 'required',
            'progress' => 'required|numeric'

        ]);

        ModelsSkills::find(request('id'))->update($validate);
        return back();

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }

    }

    public function delete(ModelsSkills $id){

    try{


        $id->delete();
        return back();

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }
    }

    public function add_show(){

        return view('Admin.Skills.add');
    }
    

    public function add(){

    try{

        $validate = request()->validate([


            'name' => 'required',
            'progress' => 'required|numeric'

        ]);

        ModelsSkills::create($validate);
        return redirect('/admin/skills/show');

    }catch(\Exception $e){
        
        return back()->with('error',$e->getMessage());
    }

    }
}
