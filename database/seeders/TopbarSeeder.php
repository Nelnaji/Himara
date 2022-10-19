<?php

namespace Database\Seeders;

use App\Models\Topbar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topbar::create([
            'heading' => 'CWelcome to hotel himara',
        ]);
    }
}
