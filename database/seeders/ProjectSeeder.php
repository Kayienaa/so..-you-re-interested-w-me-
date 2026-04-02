<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Description 1',
            'image' => 'Image1.jpg',
            'github' => 'Github1',
            'link' => 'Link1',
        ]);
    }
}
