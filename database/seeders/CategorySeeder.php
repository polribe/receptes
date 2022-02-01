<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Category;
use Faker\Factory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 3; $i++) {
                Category::create([
                    'name' => $faker->sentence(1)
                ]);
            }
    }
}
