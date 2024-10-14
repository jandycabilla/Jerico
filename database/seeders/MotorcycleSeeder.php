<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motorcycle;

class MotorcycleSeeder extends Seeder
{
    public function run()
    {
        // Create 50 motorcycles
        Motorcycle::factory()->count(50)->create();
    }
}
