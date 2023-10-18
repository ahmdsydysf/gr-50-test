<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([

            'title' => 'news num 1',
            'description' => 'asjasdofspodfjspojgvsdjpjvsdpojfvpsdofvposdfjsdfjvsdknvn',

        ]);
    }
}
