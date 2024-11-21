<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Paulo Castro',
            'email' => 'prpaulohcmg@gmail.com',
            'password' => '$2y$10$DRL4/xx34FrVqD/z8wTP/eNbea6wcmFTBOnDtpFzdgWp4RntGNVJS'
        ]);
    }
}
