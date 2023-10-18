<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class taskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'name' => $this->faker->userName(),
        //     'email' => fake()->unique()->email(),
        //     'password' => fake()->password(6, 16),
        //     'first_name' => fake()->firstName(),
        //     'last_name' => fake()->name(),
        //     'img' => fake()->imageUrl(250, 250),
        //     'words' => fake()->words(2, true),
        //     'is_active' => fake()->boolean(90),
        //     'sentence' => fake()->sentence(),
        //     'paragraph' => fake()->realText(),
        //     'human_word' => fake()->word(),
        //     'non_human_word' => fake()->word(),
        //     'num_of_times' => fake()->numberBetween(3, 1546),
        //     'this_year' => fake()->dateTimeInInterval(),
        //     'emoji' => fake()->emoji(),
        // ];
        return [
            'task_name' => fake()->unique()->sentence(),
            'project_id' => Project::inRandomOrder()->first()->id,

        ];
    }
}
