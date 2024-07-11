<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $catJS = new Category();
        $catJS->name = "JavaScript";
        $catJS->icon = "fa-brands fa-js";
        $catJS->save();
        
        $catVue = new Category();
        $catVue->name = "VueJS";
        $catVue->icon = "fa-brands fa-vuejs";
        $catVue->save();
        
        $catPHP = new Category();
        $catPHP->name = "PHP";
        $catPHP->icon = "fa-brands fa-php";
        $catPHP->save();
        
        $catLaravel = new Category();
        $catLaravel->name = "Laravel";
        $catLaravel->icon = "fa-brands fa-laravel";
        $catLaravel->save();

    }
}
