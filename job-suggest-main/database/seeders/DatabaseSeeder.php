<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("Default Users Seeding...");
        $this->call(UserSeeder::class);

        $this->command->info("Master Reason Seeding...");
        $this->call(ReasonSeeder::class);
    }
}
