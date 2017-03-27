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
            $nbPosts = random_int(1,10);
            for ($i = 0; $i <= $nbPosts; $i++) {
                /** @var \App\User $user */
                $user->posts()->save(factory(\App\Post::class)->make());
            }
        });
    }
}
