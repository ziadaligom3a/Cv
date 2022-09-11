<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\Pages;
use App\Models\Project;
use App\Models\SiteInfo;
use App\Models\Skills;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index(){

        return view('index',[

            'SiteInfo' => SiteInfo::get(),
            'pages' => Pages::all(),
            'bios' => Bio::all(),
            'skills' => Skills::all(),
            'projects' => Project::all()
        ]);
    }
}
