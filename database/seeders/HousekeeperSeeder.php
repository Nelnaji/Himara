<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousekeeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Team::factory(1)->create([

        'name' => 'Jeanette Owens',
        "title" => "Housekeeper",
        'is_housekeeper' => true,
        'image' => "staff1.jpg",
        'description' => "Lorem Ipsum which looks many web sites pass websites is therefore always.",
        ]);
    }
}
