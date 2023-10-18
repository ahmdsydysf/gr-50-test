<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cats = [
            ['name' => 'mlabsss' , 'cat_code' => 123,'cat_desc' => 'admin123'],
            ['name' => 'a7zya' , 'cat_code' => 546 ,'cat_desc' => 'admin123123']
        ];
        foreach ($cats as $value) {

            DB::table('categories')->insert([
                'name' => $value['name'],
                'cat_code' => $value['cat_code'],
                'cat_desc' => $value['cat_desc'],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
