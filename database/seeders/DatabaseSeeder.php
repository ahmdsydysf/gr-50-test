<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\Post;
use App\Models\Task;
use App\Models\User;
use App\Models\Country;
use App\Models\Project;
use App\Models\Mechanic;
use Illuminate\Database\Seeder;
use Database\Factories\PostFactory;
use Database\Factories\UserFactory;
use Database\Factories\CountryFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // $this->call(BranchSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(TaskSeeder::class);
        // $this->call(NewsSeeder::class);


        // User::factory(10)->create()
        //         ->each(function ($user) {
        //             Project::factory(10)->create()
        //             ->each(function ($project) {
        //                 Task::factory(7)->create();
        //             });
        //         });

        $this->call(CountrySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(UserSeeder::class);
        Country::factory(5)->create();
        Post::factory(5)->create();
        User::factory(5)->create();
        Mechanic::factory(10)->create()
        ->each(function ($mecha) {
            Car::factory(1)->create([
                'mechanic_id' => $mecha->id
            ])
            ->each(function ($car) {
                User::factory(1)->create([
                    'car_id' => $car->id
                ]);
            });
        });

        // Task::factory(100)->create();

        //\App\Models\User::factory(10000000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
