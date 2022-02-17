<?php
namespace App\Contracts;

use App\Models\VideoGame;

interface GameService
{
    function getGameById(int $id): VideoGame;

    function getGames(): array;
}
