<?php

namespace Database\Seeders;

use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 15; $i++){
            \DB::table('books')->insert([
                'category_id' => $faker->numberBetween(1,3),
                'title' => $faker->sentence()

            ]);
        }

    }
}
