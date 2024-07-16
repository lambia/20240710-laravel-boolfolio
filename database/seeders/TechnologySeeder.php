<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        $techJS = new Technology();
        $techJS->name = "JavaScript";
        $techJS->icon = "fa-brands fa-js";
        $techJS->save();
        
        $techVue = new Technology();
        $techVue->name = "VueJS";
        $techVue->icon = "fa-brands fa-vuejs";
        $techVue->save();
        
        $techPHP = new Technology();
        $techPHP->name = "PHP";
        $techPHP->icon = "fa-brands fa-php";
        $techPHP->save();
        
        $techLaravel = new Technology();
        $techLaravel->name = "Laravel";
        $techLaravel->icon = "fa-brands fa-laravel";
        $techLaravel->save();

    }
}
