<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\Task;
use App\Models\User;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Category;
use App\Models\Mechanic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()
        ->each(function (User $user) {
            Profile::factory(1)->create(['user_id' => $user->id]);
        });

        Category::factory(5)->create()
        ->each(function ($cat) {
            Category::factory(2)->create(['parent_category_id' => $cat->cat_id]);
        });

        Product::factory(50)->create();
    }
}
