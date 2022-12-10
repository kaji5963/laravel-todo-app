<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '鈴木',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => '佐藤',
                'email' => 'test1@test1.com',
                'password' => Hash::make('password456'),
            ],
        ]);
    }
}
