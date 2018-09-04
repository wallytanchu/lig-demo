<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();

        $faker = \Faker\Factory::create();

        // We did this for test purposes. Shouldn't be doing this for production
        $password = Hash::make('123456');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@lig.com',
            'password' => $password,
        ]);
    }
}
