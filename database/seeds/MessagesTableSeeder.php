<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->truncate();
        DB::table('messages')->insert([
            ['text' => 'こんにちは', 'university_id' => 1],
            ['text' => 'こんばんは', 'university_id' => 2],
            ['text' => 'ありがとう', 'university_id' => 1],
            ['text' => 'さようなら', 'university_id' => 1],
        ]);
    }
}
