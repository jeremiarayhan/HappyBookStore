<?php

namespace Database\Seeders;

use Faker\Factory as Faker;

use App\Models\Book;

use Illuminate\Database\Seeder;

class BookDetailSeeder extends Seeder
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
            \DB::table('details')->insert([
                'book_id' =>$i,
                'author' => $faker->name,
                'publisher'=>$faker->unique()->word,
                'year'=>$faker->year(),
                'description'=>$faker->text($maxNbChars = 200)

            ]);
        }
    }
}
