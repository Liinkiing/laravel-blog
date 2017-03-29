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
        factory(\App\User::class, 5)->create()->each(function($user) {
            /** @var \App\User $user */
            $nbPost = random_int(2,5);
            for($i = 0; $i <= $nbPost; $i++) {
                /** @var \App\Post $post */

                $post = factory(\App\Post::class)->make();
                $post->author_id = $user->id;
                $post->save();
            }
        });
    }
}
