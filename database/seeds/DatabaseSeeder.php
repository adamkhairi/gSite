<?php

use App\Article;
use App\Category;
use App\Comment;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        // create a few articles,users,comments,categories in database:
        for ($i = 0; $i < 10; $i++) {
//            Article::create([
//                'title' => $faker->sentence,
//                'img' => $faker->imageUrl(),
//                'body' => $faker->paragraph,
//                'user_id' => value(1),
//                'category_id' => value(1),
//            ]);
//            User::create([
//                'name' => $faker->name,
//                'email' => $faker->email,
//                'address' => $faker->address,
//                'birthday' => $faker->date(),
//                'is_admin' => 0,
//                'genre' => $faker->boolean,
//                'password' => Hash::make('123456')
//            ]);
            Comment::create([
                'body' => $faker->sentence,
                'user_id' => value(1),
                'article_id' => value(1),
            ]);
//            Category::create([
//                'name' => $faker->colorName,
//
//            ]);
        }
        // $this->call(UserSeeder::class);
    }
}
