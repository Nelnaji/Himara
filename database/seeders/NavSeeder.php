<?php

namespace Database\Seeders;

use App\Models\Nav;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nav::create([
            'name' => 'home',
            'href' => 'welcome'
        ]);

        Nav::create([
            'name' => 'rooms',
            'href' => "rooms"
        ]);
        Nav::create([
            'name' => 'team',
            'href' => "team"
]);
        Nav::create([
            'name' => 'gallery',
            'href' => "gallery"
]);
        Nav::create([
            'name' => 'contact us',
            'href' => "contact"
        ]);
    }
}
