<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Cd;
use App\Models\Game;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 120 data was created for combine of book cd and game
        User::factory(10)->create();
        Book::factory(60)->create();
        Cd::factory(60)->create();
        Game::factory(60)->create();
    }
}
