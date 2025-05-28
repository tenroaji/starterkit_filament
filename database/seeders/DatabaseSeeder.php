<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run the admin user seeder
        $this->call([
            AdminUserSeeder::class,
        ]);
    }
}
