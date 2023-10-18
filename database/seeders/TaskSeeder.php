<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'name' => 'ahmed sayed',
            'email' => 'ahmed@sayed.com',
            'password' => 'ahmedsayed123',
            'first_name' => 'ahmed',
            'last_name' => 'sayed',
            'img' => 'ahmed.png',
            'words' => 'ahmed sayed youssif',
            'is_active' => false,
            'sentence' => 'ahmed sentence',
            'paragraph' => 'ahmed paragraph',
            'human_word' => 'ahmed human_word',
            'non_human_word' => 'non_human_wor',
            'num_of_times' => 20,
            'this_year' => '2023-10-10',
            'emoji' => ';)',
        ]);
    }
}
