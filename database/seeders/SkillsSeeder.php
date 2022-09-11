<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([

            [
            'name' => 'HTML',
            'progress' => '70'
            ],

            [

                'name' => 'PHP',
                'progress' => '80'
            ],
            [
                'name' => 'Search',
                'progress' => '70'
            ],
            [
                'name' => 'Problem solving',
                'progress' => '70'
            ],

            [
                'name' => 'Hacking',
                'progress' => '90'
            ],

            [
                'name' => 'SQL',
                'progress' => '70' 
            ],

            [
                'name' => 'Network',
                'progress' => '80'
            ],
            [

                'name' => 'Laravel',
                '70'
            ],
            

        ]);
    }
}
