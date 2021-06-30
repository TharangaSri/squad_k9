<?php

use Illuminate\Database\Seeder;
use App\Assets;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assets::truncate();

        for ($i = 1; $i < 11; $i++) {
            Assets::create([
                'name' => $i . '.jpg'
            ]);
        }
    }
}
