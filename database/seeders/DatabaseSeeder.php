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
        User::factory(5)->create();
        Listing::factory(6)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Webmantra',
        //     'location' => 'Kolkata, WB',
        //     'email' => 'hr@webmantra.com',
        //     'website' => 'www.webmantra.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis nam neque autem aperiam. Quasi voluptas neque voluptatibus deleniti, reprehenderit dignissimos ducimus architecto nostrum facilis veniam. Adipisci aliquid exercitationem eveniet vel.'
        // ]);
    }
}
