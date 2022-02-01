<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Recipe;
use App\models\Category;
use App\models\User;
use App\models\Ingredient;
use App\models\Comment;
use App\models\Step;
use Faker\Factory;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $categories = Category::all();

        foreach($categories as $category){
        	for($i = 0;$i < 4; $i++){
        		
        		$image = $faker->image(storage_path('app/public'),600,400,'cats');
        		$image = explode('/', $image);
        		$image = 'storage/' .end($image);


        		$recipe = Recipe::create([
        			'name' => $faker->sentence($faker->randomDigitNot(0)),
        			'description' => $faker->paragraph(),
    				'image' => $image,
    				'cookingTime' => $faker->bothify('PT##M'),
    				'user_id'=> User::inRandomOrder()->first()->id,
    				'category_id' => $category->id,
        		]);

        		for($j = 0; $j < 10; $j++){
        			Ingredient::create([
        				'name'=>$faker->sentence(),
        				'recipe_id' => $recipe->id,
        			]);
        		}

        		for($j = 0; $j < 10; $j++){
        			Step::create([
        				'instruction'=> $faker->paragraph(),
        				'recipe_id' => $recipe->id,
        			]);
        		}

        		for($j = 0; $j < 3; $j++){
        			Comment::create([
        				'content'=> $faker->sentence(6),
        				'recipe_id' => $recipe->id,
        				'user_id' => User::inRandomOrder()->first()->id,
        			]);
        		}
        	}
        }
    }
}
