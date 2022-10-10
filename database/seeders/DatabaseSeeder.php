<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(ModeratorSeeder::class);
        $this->call(EditorSeeder::class);


        \App\Models\User::factory(1)->create([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user')
        ]);
    }
}
