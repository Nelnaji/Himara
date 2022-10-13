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
            'href' => "route('welcome')"
        ]);

        Nav::create([
            'name' => 'home',
            'href' => "route('welcome')"
        ]);
        Nav::create([
            'name' => 'home',
            'href' => "route('welcome')"
]);
        Nav::create([
            'name' => 'home',
            'href' => "route('welcome')"
]);
        Nav::create([
            'name' => 'home',
            'href' => "route('welcome')"
        ]);
    }
}
