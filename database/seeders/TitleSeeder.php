<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::create([
            'main_title' => 'HOTEL HIMARA.',
            'color_title' => "SINCE 1992",
          ]);

          Title::create([
            'main_title' => 'OUR',
            'color_title' => "ROOMS",
          ]);
          Title::create([
            'main_title' => 'HIMARA.',
            'color_title' => "SERVICES",
          ]);

          Title::create([
            'main_title' => 'HIMARA.',
            'color_title' => "GALLERY",
          ]);
          Title::create([
            'main_title' => 'OUR GUESTS LOVE US',

          ]);

          Title::create([
            'main_title' => 'HIMARA.',
            'color_title' => "RESTAURANT",
          ]);

          Title::create([
            'main_title' => 'LATEST',
            'color_title' => "NEWS",
          ]);
          Title::create([
            'main_title' => 'GET IN TOUCH',

          ]);

          Title::create([
            'main_title' => 'CONTACT US',

          ]);

    }
}
