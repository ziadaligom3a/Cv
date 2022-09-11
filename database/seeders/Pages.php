<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([

            [
                'name' => 'ABOUT',
                'path' => '#about'
            ],         
            
            [
                'name' => 'SKILLS',
                'path' => '#skill'
            ],
            [
                'name' => 'My Projects',
                'path' => '#myprojects'
            ],
            [
                'name' => 'EXPERIENCE',
                'path' => '#experience'
            ],
           
        ]);
    }
}
