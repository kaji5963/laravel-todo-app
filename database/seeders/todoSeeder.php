<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            [
                'task' => '鈴木さんのTODO①',
                'user_id' => 1,
                'created_at' => Now(),
            ],
            [
                'task' => '鈴木さんのTODO②',
                'user_id' => 1,
                'created_at' => Now(),
            ],
            [
                'task' => '鈴木さんのTODO③',
                'user_id' => 1,
                'created_at' => Now(),
            ],
            [
                'task' => '佐藤さんのTODO①',
                'user_id' => 2,
                'created_at' => Now(),
            ],
            [
                'task' => '佐藤さんのTODO②',
                'user_id' => 2,
                'created_at' => Now(),
            ],
        ]);
    }
}
