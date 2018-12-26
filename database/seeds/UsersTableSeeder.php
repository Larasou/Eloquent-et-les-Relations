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
                    $user->profile(factory('App\Profile', 1)->create([
                        'user_id' => $user->id
                    ]));
                });


                $users->each(function ($user) {
                    $user->posts(factory('App\Post', 25)->create([
                        'user_id' => $user->id
                    ]));
                });
            });
        });

    }
}
