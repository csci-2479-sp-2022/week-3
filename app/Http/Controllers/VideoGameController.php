<?php

namespace App\Http\Controllers;

use App\Models\VideoGame;
use Illuminate\Http\Request;

class VideoGameController extends Controller
{
    /**
     * This is our controller action for the /games URL of our app
     */
    public function show()
    {
        // controller actions typically return a view and a model
        return view(
            'game-list', // name of the view, i.e. views/game-list.blade.php
            [
                //the keys define variables in the template, i.e. $games
                'games' => self::getGames(),
            ]);
    }

    public function view(int $id)
    {
        return view('game-details', [ 'game' => self::getGameById($id) ]);
    }

    private static function getGameById(int $id): VideoGame
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
    private static function getGames(): array
    {
        return [
            new VideoGame(1, 'Super Mario Bros', '1985', 'NES', true),
            new VideoGame(2, 'Super Castlevania IV', '1991', 'SNES', true),
            new VideoGame(3, 'Chrono Trigger', '1995', 'SNES', true),
        ];
    }
}
