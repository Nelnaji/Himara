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
// slider 1

Slider::create([
        'star_title' => 'Star Luxury Hotel',
        'button1' => 'book a room now',
        'button2' => 'contact us now',
        'main_title' => 'Touch the dream',
        'sub_title' => "Live your myth in hotel himara",
        'image' => 'slider1.jpg',
    ]);
// Slider 2

Slider::create([
        'main_title' => 'Where dreams come true',
        'sub_title' => "You'll Never Forget Your stay",
        'image' => 'slider2.jpg',
]);


// Slider 3

Slider::create([
        'main_title' => 'Enjoy your holidays',
        'sub_title' => "family room from €89 per night",
        'image' => 'slider3.jpg',
 ]);

    }
}
