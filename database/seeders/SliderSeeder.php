<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Slider::create([
            'star_title' => 'Star Luxury Hotel',
            'button1' => 'book a room now',
            'button2' => 'contact us now',
// slider 1

        'slider1_title' => 'Touch the dream',
        'slider1_subtitle' => "Live your myth in hotel himara",
        'slider1_img' => 'slider1.jpg',
// Slider 2

        'slider2_title' => 'Where dreams come true',
        'slider2_subtitle' => "You'll Never Forget Your stay",
        'slider2_img' => 'slider2.jpg',
// Slider 3
        'slider3_title' => 'Enjoy your holidays',
        'slider3_subtitle' => "family room from €89 per night",
        'slider3_img' => 'slider3.jpg',
        ]);

    }
}
