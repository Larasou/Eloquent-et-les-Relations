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
        $countries = factory('App\Country', 5)->create();
        factory('App\Tag', 5)->create();

        $countries->each(function ($country) {
            $cities = factory('App\City', 5)->create([
                'country_id' => $country->id
            ]);

            $cities->each(function ($city) {
                $users = factory('App\User', 10)->create([
                    'city_id' => $city->id
                ]);

                $users->each(function ($user) {
                    factory('App\Profile', 1)->create([
                        'user_id' => $user->id
                    ]);
                });


                $users->each(function ($user) {
                    $posts = factory('App\Post', 3)->create([
                        'user_id' => $user->id
                    ]);

                    $posts->each(function ($post) use ($user) {
                        factory('App\Comment', 7)->create([
                            'user_id' => \App\User::get()->random()->id,
                            'commentable_id' => $post->id,
                            'commentable_type' => get_class($post),
                        ]);

                       $post->tags()->sync(array_random([1, 2, 3, 4, 5], 3));
                    });

                    $tutorials = factory('App\Tutorial', 3)->create([
                        'user_id' => $user->id
                    ]);

                    $tutorials->each(function ($tutorial) use ($user) {
                        factory('App\Comment', 7)->create([
                            'user_id' => \App\User::get()->random()->id,
                            'commentable_id' => $tutorial->id,
                            'commentable_type' => get_class($tutorial),
                        ]);

                        $tutorial->tags()->sync(array_random([1, 2, 3, 4, 5], 3));
                    });
                });
            });
        });

    }
}
