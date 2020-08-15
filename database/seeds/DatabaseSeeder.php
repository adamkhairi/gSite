<?php

use App\Article;
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

        Article::truncate();

        $faker = Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
//            Article::create([
//                'title' => $faker->sentence,
//                'img' => $faker->imageUrl(),
//                'body' => $faker->paragraph,
//                'user_id' => $faker->numberBetween(1,2),
//                'category_id'=>$faker->numberBetween(1,4),
//            ]);
//            User::create([
//               'name' => $faker->name,
//                'email' => $faker->email,
//                'address' => $faker->address,
//                'birthday' => $faker->date(),
//                'is_admin' => 0,
//                'genre' => $faker->boolean,
//                'password' => Hash::make('123456')
//            ]);
        }
        // $this->call(UserSeeder::class);
    }
}
