<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $newProject = new Project();
            $newProject->name = $faker->sentence(2);
            $newProject->description = $faker->sentence(22);
            $newProject->img = "https://picsum.photos/id/" . rand(1, 500) . "/800/200";
            $newProject->save();
        }
    }
}
