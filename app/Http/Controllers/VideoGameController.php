<?php

namespace App\Http\Controllers;

use App\Contracts\GameService;
use Illuminate\Http\Request;

class VideoGameController extends Controller
{
    public function __construct(
        private GameService $gameService
    )
    { }

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
                'games' => $this->gameService->getGames(),
            ]);
    }

    public function view(int $id)
    {
        return view('game-details', [ 'game' => $this->gameService->getGameById($id) ]);
    }
}
