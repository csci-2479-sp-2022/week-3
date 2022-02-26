<?php

namespace Tests\Feature;

use App\Contracts\GameService;
use App\Models\VideoGame;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\MockInterface;
use Tests\TestCase;

class VideoGameControllerTest extends TestCase
{
    private MockInterface $gameServiceSpy;

    protected function setUp(): void
    {
        parent::setUp();

        $this->gameServiceSpy = $this->spy(GameService::class);
    }

    public function test_gamesRoute_returns_successful()
    {
        // arrange
        $this->gameServiceSpy->shouldReceive('getGames')
            ->once()
            ->andReturn([
                new VideoGame(1, 'Super Mario Bros 3', '1990', 'NES', true),
            ]);

        // act
        $response = $this->get('/games');

        // assert
        $response->assertStatus(200);
        $response->assertViewHas('games', [
            new VideoGame(1, 'Super Mario Bros 3', '1990', 'NES', true),
        ]);
    }

    public function test_gameRoute_returns_successful()
    {
        // arrange
        $this->gameServiceSpy->shouldReceive('getGameById')
            ->once()
            ->andReturn(
                new VideoGame(1, 'Super Mario Bros 3', '1990', 'NES', true),
            );

        // act
        $response = $this->get('/games/1');

        // assert
        $response->assertStatus(200);
        $response->assertViewHas('game',
            new VideoGame(1, 'Super Mario Bros 3', '1990', 'NES', true),
        );
    }
}
