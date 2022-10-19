<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'figcaption' => 'Croissant',
            'filter' => 'filter-restaurant',
            'image' => 'gallery1.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'Swimming pool',
            'filter' => 'filter-swimmingpool',
            'image' => 'gallery2.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'rocks on back',
            'filter' => 'filter-spa',
            'image' => 'gallery3.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'just a test',
            'filter' => 'filter-roomview',
            'image' => 'gallery4.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'lolpolol',
            'filter' => 'filter-roomview',
            'image' => 'gallery5.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'Croissant',
            'filter' => 'filter-restaurant',
            'image' => 'gallery6.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'Swimming pool',
            'filter' => 'filter-swimmingpool',
            'image' => 'gallery7.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'rocks on back',
            'filter' => 'filter-spa',
            'image' => 'gallery8.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'just a test',
            'filter' => 'filter-roomview',
            'image' => 'gallery9.jpg',

        ]);
        Gallery::create([
            'figcaption' => 'lolpolol',
            'filter' => 'filter-roomview',
            'image' => 'gallery10.jpg',

        ]);
    }
}
