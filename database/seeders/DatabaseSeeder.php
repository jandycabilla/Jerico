<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MotorcycleSeeder; // Import the MotorcycleSeeder

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MotorcycleSeeder::class, // Call your MotorcycleSeeder here
            // You can add other seeders here as needed
        ]);
    }
}
