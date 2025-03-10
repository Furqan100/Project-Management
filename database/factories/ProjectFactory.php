<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [

            //
            'name'=>fake()->paragraph(),
            'description' => fake()->paragraph(),
            'due_date' => fake()->dateTimeBetween(Carbon::now(), Carbon::now()->addMonths(6))->format('Y-m-d H:i:s'),

        ];
    }
}
