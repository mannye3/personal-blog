<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['user_id' => 1, 'title' => 'Post One', 'content' => 'THIS IS POST ONE ' ],
            ['user_id' => 1, 'title' => 'Post Two', 'content' => 'THIS IS POST TWO ' ],
            ['user_id' => 1, 'title' => 'Post Three', 'content' => 'THIS IS POST THREE ' ],

        ]);
    }
}
