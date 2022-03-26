<?php

namespace Database\Seeders;

use App\Models\VideoGame;
use App\Models\System;
use Illuminate\Database\Seeder;

class VideoGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // generate systems
        $systemFactory = System::factory();
        $systemFactory->count(10)->create();

        // generate games
        $gameFactory = VideoGame::factory();
        $gameFactory->count(50)->create();
    }
}
