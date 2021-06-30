<?php

use Illuminate\Database\Seeder;
use App\Fact;

class FactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fact::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Fact::create([
                'body' => $faker->sentence,
            ]);
        }
    }
}
