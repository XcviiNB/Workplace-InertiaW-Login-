<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $id = 1;
        $user = User::find($id);
        $id++;


         return [
             'name'      => fake()->company,
             'office_head' => $user->id,
             'building'  => fake()->secondaryAddress
         ];
    }
}
