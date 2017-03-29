<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 10)->create()->each(function($user) {
            /** @var \App\User $user */

            $nbPost = random_int(5,10);
            for($i = 0; $i <= $nbPost; $i++) {
                /** @var \App\Post $post */

                $post = factory(\App\Post::class)->make();
                $post->author_id = $user->id;
                $post->save();
                $nbComment = random_int(6,20);
                for($j = 0; $j <= $nbComment; $j++) {
                    /** @var \App\Comment $comment */

                    $comment = factory(\App\Comment::class)->make();
                    $comment->post_id = $post->id;
                    $comment->save();
                }
            }
        });
    }
}
