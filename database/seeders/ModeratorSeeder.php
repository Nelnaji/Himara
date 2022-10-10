<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModeratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([ 'name' => 'Moderator',
                'email' => 'moderator@himara.com',
                'password' => Hash::make('moderator'), 'is_moderator' => true]);
    }
}
