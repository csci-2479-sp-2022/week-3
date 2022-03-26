<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SystemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'code' => $this->getCode(),
        ];
    }

    private function getCode(): string
    {
        $code = $this->faker->randomLetter() .
            $this->faker->randomLetter() .
            $this->faker->randomLetter();

        return strtoupper($code);
    }
}
