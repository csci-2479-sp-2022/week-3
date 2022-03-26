<?php

namespace Database\Factories;

use App\Models\System;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoGameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'release_year' => $this->faker->year(),
            'system_id' => $this->getRandomSystemId()['id'],
            'completed' => $this->faker->boolean(75),
        ];
    }

    private function getRandomSystemId()
    {
        $ids = System::all('id');

        return $this->faker->randomElement($ids);
    }
}
