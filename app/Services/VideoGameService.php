<?php

namespace App\Services;

use App\Contracts\GameService;
use App\Models\VideoGame;

class VideoGameService implements GameService
{
    public function getGameById(int $id): VideoGame
    {
        foreach (self::getGames() as $game) {
            if ($game->id === $id) {
                return $game;
            }
        }

        return null;
    }

    /**
     * pretend this is making a call to a service layer that in turn calls a data layer
     */
    public function getGames()
    {
        return VideoGame::all();
        // return [
        //     new VideoGame([1, 'Super Mario Bros', '1985', 'NES', true]),
        //     new VideoGame([2, 'Super Castlevania IV', '1991', 'SNES', true]),
        //     new VideoGame([3, 'Chrono Trigger', '1995', 'SNES', true]),
        // ];
    }
}
