<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan migrate:fresh --seed
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);
    }
}
