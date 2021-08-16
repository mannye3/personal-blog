<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['user_id' => 1, 'post_id' => 1, 'content' => 'THIS IS COMMENT FOR POST ONE ' ],
            ['user_id' => 1, 'post_id' => 2, 'content' => 'THIS IS COMMENT FOR  POST TWO ' ],
            ['user_id' => 1, 'post_id' => 1, 'content' => 'THIS IS COMMENT FOR  POST THREE ' ],

        ]);
    }
}
