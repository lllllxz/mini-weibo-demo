<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(FollowersTableSeeder::class);
//        factory(\App\Models\User::class, 100)->create();

        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
