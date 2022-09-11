<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project as ModelsProject;
use Illuminate\Http\Request;

class Project extends Controller
{
    public function show(){
        
        return view('Admin.Projects.show',[

            'projects' => ModelsProject::all()
        ]);
    }

    public function edit_show(ModelsProject $id){

        return view('Admin.Projects.edit',[

            'project' => $id
        ]);

    }

    public function edit(){

    try{

        $validate = request()->validate([


            'name' => 'required',
            'img' => 'required',
            'brief' => 'required',
            'link' => 'required'

        ]);

        ModelsProject::find(request('id'))->update($validate);
        return redirect('/admin/projects/show');

        
    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }

    }

    public function delete(ModelsProject $id){

    try{

        $id->delete();
        return back();

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }
    
    }

    public function add_show(){

        return view('Admin.Projects.add');
    }

    public function add(){

    try{


        $validate = request()->validate([

            'name' => 'required',
            'img' => 'required',
            'brief' => 'required',
            'link' => 'required'

        ]);

        ModelsProject::create($validate);
        return redirect('/admin/projects/show');

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }

    }
}
