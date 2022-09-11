<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\BioController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        $this->call(Pages::class);
        $this->call(SiteInfo::class);
        $this->call(BioSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
