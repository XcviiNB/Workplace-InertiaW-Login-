<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $id = 1;
        $office = Office::find($id);
        $id++;

        return [
            'office_id'             => $office->id,
            'name'                  => fake()->colorName,
            'description'           => fake()->sentence,
            'value'                 => fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999999),
            'status'                => fake()->randomElement(['Good', 'Damaged', 'Lost']),
            'date_acquired'         => fake()->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
