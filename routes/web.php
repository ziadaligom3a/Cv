<?php

use App\Http\Controllers\Admin\Bio\Edit;
use App\Http\Controllers\Admin\Dashboard;
use \App\Http\Controllers\Admin\Login;
use App\Http\Controllers\Admin\Logout;
use App\Http\Controllers\Admin\Pages;
use App\Http\Controllers\Admin\Project;
use App\Http\Controllers\Admin\SiteInfo;
use App\Http\Controllers\Admin\Skills as AdminSkills;
use App\Http\Controllers\Index;
use App\Models\Skills;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Index::class,'index']);

Route::group(['prefix' => 'admin'],function(){
    Route::middleware('guest')->group(function(){

        Route::get('login',[Login::class,'index'])->name('login');
        Route::post('login',[Login::class,'login']);


    });

 Route::middleware('auth')->group(function () {
                    
                    /* Dashboard Index */
        Route::get('dashboard',[Dashboard::class,'index']);
                   /* Dashboard Index */

        /* Pages Routes */
        Route::get('pages/show',[Pages::class,'show']);
        Route::get('pages/add',[Pages::class,'add_show']);
        Route::post('pages/add',[Pages::class,'add']);
        Route::get('pages/edit/{id}',[Pages::class,'edit_show']);
        Route::post('pages/edit',[Pages::class,'edit']);
        Route::get('pages/delete/{id}',[Pages::class,'delete']);
         /* Pages Routes */


         /* Projects Routes */
        Route::get('projects/show',[Project::class,'show']);
        Route::get('projects/edit/{id}',[Project::class,'edit_show']);
        Route::post('projects/edit',[Project::class,'edit']);
        Route::get('projects/delete/{id}',[Project::class,'delete']);
        Route::get('projects/add',[Project::class,'add_show']);
        Route::post('projects/add',[Project::class,'add']);
        /* Projects Routes */

         /* Bio Routes */
        Route::get('bio/edit',[Edit::class,'index']);
        Route::post('bio/edit',[Edit::class,'edit']);
        /* Bio Routes */


        /* Site Info Routes */
        Route::get('siteinfo/edit',[SiteInfo::class,'edit_show']);
        Route::post('siteinfo/edit',[SiteInfo::class,'edit']);
        /* Site Info Routes */


        /* Skills Routes */
        Route::get('skills/show',[AdminSkills::class,'show']);
        Route::get('skills/edit/{id}',[AdminSkills::class,'edit_show']);
        Route::post('skills/edit',[AdminSkills::class,'edit']);
        Route::get('skills/delete/{id}',[AdminSkills::class,'delete']);
        Route::get('skills/add',[AdminSkills::class,'add_show']);
        Route::post('skills/add',[AdminSkills::class,'add']);
        /* Skills Routes */

        Route::post('logout',[Logout::class,'logout']);
    });

});
