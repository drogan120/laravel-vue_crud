<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $faker = Faker::create();
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'address' => $faker->address,
                'photo' => $faker->text,
                'password' => Hash::make('password')
            ]);
        }
    }
}
