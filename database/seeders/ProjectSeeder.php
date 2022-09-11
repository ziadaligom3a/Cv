<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([

            [
                'name' => 'Blog Project',
                'img' => 'https://www.site-shot.com/cached_image/ktClZir-Ee2dQgJCrBEABA',
                'brief' => 'Laravel Blog Project',
                'link' => 'http://blogzix.herokuapp.com'
            ],
            [
                'name' => 'Technology devices Store',
                'img' => 'https://www.site-shot.com/cached_image/ucBAiisAEe2fHAJCrBEABA',
                'brief' => 'Laravel Store Project',
                'link' => 'http://zix3store.herokuapp.com'
            ],
            [
                'name' => 'Bug Bounty HOF',
                'img' => 'https://blog.zoom.us/wp-content/uploads/2022/03/Bug-bounty.png',
                'brief' => 'Hall Of Fame from AMEX to found vulnerability in their website',
                'link' => 'https://bugcrowd.com/amexgbt-vdp/hall-of-fame'
            ],
            
            [
                'name' => 'Technology devices Store 2',
                'img' => 'https://www.site-shot.com/cached_image/ucBAiisAEe2fHAJCrBEABA',
                'brief' => 'Laravel Store Project 2',
                'link' => 'Not yet'
            ],

        ]);
    }
}
