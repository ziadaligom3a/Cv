<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages as ModelsPages;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class Pages extends Controller
{
    public function show(){

        return view('Admin.Pages.pages',[

            'pages' => ModelsPages::all()
        ]);
    }


    public function edit_show(ModelsPages $id){

        // dd($id);
        return view('Admin.Pages.edit',
    [
        'page' => $id
    ]);
    }

    public function edit(){

    try{

        $validate = request()->validate([


            'name' => 'required',
            'path' => 'required'

        ]);

        ModelsPages::find(request('id'))->update($validate);
        return back();

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }


    }

    public function delete(ModelsPages $id){


        $id->delete();
        return back();

    }


    public function add_show(){

        return view('Admin.Pages.add');
    }

    public function add(){

    try{

    
        $validate = request()->validate([

            'name' => 'required',
            'path' => 'required'

        ]);

        ModelsPages::create($validate);
        return redirect('/admin/pages/show');
    
    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }


    }
}
