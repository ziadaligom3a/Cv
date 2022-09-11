<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bios')->insert([

            'name' => 'Ziad Ali',
            'img' => 'https://iili.io/4skwx4.png',
            'brief' => 'PHP Laravel Backend Developer, Web Application Penetration Tester',
            'age' => '16',
            'email' => 'ajzead@gmail.com',
            'phone' => '01062898075',
            'LANGUAGE' => 'English, German'

        ]);
    }
}
