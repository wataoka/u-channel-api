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
            ['text' => 'hello', 'university_id' => 1],
            ['text' => 'thanks', 'university_id' => 2],
            ['text' => 'good bye', 'university_id' => 1],
            ['text' => 'yes', 'university_id' => 1],
        ]);
    }
}
