<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \App\Post $post */

        $author_ids = \App\User::pluck('id')->toArray();
        $posts = \App\Post::all();

        foreach ($posts as $post) {
            $nbComments = random_int(2,8);

            if((bool)random_int(0,1)) {
                for ($i = 0; $i <= $nbComments; $i++) {
                    /** @var \App\Comment $comment */

                    $comment = factory(\App\Comment::class)->make();
                    $comment->post()->associate($post);
                    $comment->author()->associate(\App\User::findOrFail($author_ids[array_rand($author_ids)]));
                    $comment->save();
                }
            }
        }
    }
}
