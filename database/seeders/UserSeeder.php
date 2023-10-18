<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])
        $users = [
            ['name' => 'admin' , 'email' => 'admin00@website.com','password' => 'admin123'],
            ['name' => 'admin1' , 'email' => 'admin10@website.com','password' => 'admin123123']
        ];
        foreach ($users as $key => $value) {

            DB::table('users')->insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'password' => Hash::make($value['password']),
                'created_at' => Carbon::now(),
            ]);
        }

    }
}
