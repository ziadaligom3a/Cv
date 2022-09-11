<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo as ModelsSiteInfo;
use Illuminate\Http\Request;

class SiteInfo extends Controller
{
    public function edit_show(){

        return view('Admin.SiteInfo.edit',[

            'Infos' => ModelsSiteInfo::all()
        ]);
    }

    public function edit(){

    try{

        $validate = request()->validate([

            'title' => 'required'
        ]);

        ModelsSiteInfo::first()->update($validate);
        return back();

    }catch(\Exception $e){

        return back()->with('error',$e->getMessage());
    }
    }
}
