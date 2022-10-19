<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Henry Garrett',
            'title' => 'receptionist',
            "image"=> "staff2.jpg",
            "description" => "Lorem Ipsum which looks many web sites pass websites is therefore always."
        ]);
        Team::create([
            'name' => 'Tommy Alexander',
            'title' => 'chef',
            "image"=> "staff3.jpg",
            "description" => "Lorem Ipsum which looks many web sites pass websites is therefore always."
        ]);
        Team::create([
            'name' => 'Penny Soto',
            'title' => 'Hotel Manager',
            "image"=> "staff4.jpg",
            "description" => "Lorem Ipsum which looks many web sites pass websites is therefore always."
        ]);
        Team::create([
            'name' => 'Alex Cox',
            'title' => 'room service',
            "image"=> "staff5.jpg",
            "description" => "Lorem Ipsum which looks many web sites pass websites is therefore always."
        ]);
        Team::create([
            'name' => 'Alfredo Romero',
            'title' => 'Hotel manager',
            "image"=> "staff6.jpg",
            "description" => "Lorem Ipsum which looks many web sites pass websites is therefore always."
        ]);
        Team::create([
            'name' => 'Glenda Gilbert',
            'title' => 'Marketing advisor',
            "image"=> "staff7.jpg",
            "description" => "Lorem Ipsum which looks many web sites pass websites is therefore always."
        ]);
        Team::create([
            'name' => 'Shella Carter',
            'title' => 'hotel manager',
            "image"=> "staff8.jpg",
            "description" => "Lorem Ipsum which looks many web sites pass websites is therefore always."
        ]);
    }
}
