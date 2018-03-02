<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ru_RU');
        for ($i = 0; $i < 100; $i++) {
            DB::table('client')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
            ]);
        }
    }
}
