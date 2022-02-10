<?php
namespace App\Models;

class VideoGame
{
    public function __construct(
        public int $id,
        public string $title,
        public string $releaseYear,
        public string $system,
        public bool $completed
    ) { }

    public function completedYesNo(): string
    {
        return $this->completed ? 'Yes' : 'No';
    }
}
