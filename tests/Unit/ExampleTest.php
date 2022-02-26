<?php

namespace Tests\Unit;

use App\Models\VideoGame;
use PHPUnit\Framework\TestCase;

class VideoGameTest extends TestCase
{
    /**
     * @dataProvider provideVideoGameData
     */
    public function test_completedYesNo(VideoGame $game)
    {
        // arrange
        $expectedYesNo = $game->completed ? 'Yes' : 'No';

        // act
        $actualYesNo = $game->completedYesNo();

        // assert
        $this->assertEquals($expectedYesNo, $actualYesNo);
    }

    public static function provideVideoGameData(): array
    {
        return [
            [new VideoGame(1, 'Super Mario Bros', '1985', 'NES', true)], // each test execution
            [new VideoGame(1, 'Legend of Zelda', '1986', 'NES', false)],
            [new VideoGame(1, 'Castlevania', '1987', 'NES', true)],
        ];
    }
}
