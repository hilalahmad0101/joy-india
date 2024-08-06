<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $categories = [
            ['name' => 'CFI Student Projects'],
            ['name' => 'Infrastructure'],
            ['name' => 'Events'],
            ['name' => 'Research & Development'],
            ['name' => 'General Fund'],
            ['name' => 'Others'],
            ['name' => 'Batch Reunion Project'],
            ['name' => 'Students Project'],
        ];

        foreach($categories as $category){
            Category::create([
                'name'=>$category['name'],
            ]);
        }


        $projects=[
            [
                'category_id'=>rand(1,6),
                'title'=>'Outdoor Wall Mounted LED TV at Himalaya Mess',
                'image'=>'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1716894812_d9391078d1088d3abe6746f136d33eafc054b8a3.jpg',
                'min'=>'4',
                'max'=>'6L'
            ],
            [
                'category_id'=>rand(1,6),
                'title'=>'IIT Madras Sharks Aquatics Team Fund',
                'image'=>'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1720514447_aquatics.png',
                'min'=>'54K',
                'max'=>'6L'
            ],
            [
                'category_id'=>rand(1,6),
                'title'=>'Global Hyperloop Competition',
                'image'=>'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1717486085_1.png',
                'min'=>'0',
                'max'=>'1.5cr'
            ],
            [
                'category_id'=>rand(1,6),
                'title'=>'1964 - 65 Diamond Reunion Fund - Krishna Hostel Common Room',
                'image'=>'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1718098496_1691749499_krishna.jpg',
                'min'=>'0',
                'max'=>'30cr'
            ],
        ];

        foreach($projects as $project){
            Project::create([
                'title'=>$project['title'],
                'category_id'=>$project['category_id'],
                'image'=>$project['image'],
                'min'=>$project['min'],
                'max'=>$project['max'],
            ]);
        }
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}