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
        $users = factory('App\User', 10)->create();

        $users->each(function ($user) {
                 $user->profile(factory('App\Profile', 1)->create([
                     'user_id' => $user->id
                 ]));
        });
    }
}
