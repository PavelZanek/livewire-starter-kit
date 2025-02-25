<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $localSeeders = [];
        if (app()->environment('local')) {
            $localSeeders = [
                FakeUserSeeder::class,
            ];
        }

        $this->call([
            UserSeeder::class,
            ...$localSeeders,
        ]);
    }
}
