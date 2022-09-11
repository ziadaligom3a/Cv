<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Ziad Ali',
            'email' => 'ajzead660@gmail.com',
            'img' => 'https://iili.io/4skwx4.png',
            'password' => bcrypt('ajzead660@gmail.com'),
            
        ]);
    }
}
