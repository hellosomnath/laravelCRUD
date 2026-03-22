<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        // Listing::factory(6)->create();

        $user = User::factory()->create([
            'name' => 'Test',
            'email' => 'test@email.com',
            'password' => bcrypt('123456')
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
