<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = ['ahmed' , 'mohamed' , 'sayed' , 'abdo'];
        foreach ($branches as $value) {

            DB::table('branches')->insert([

                'name' => $value,

            ]);
        }
    }
}
