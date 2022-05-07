<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [1, 2, 3, 4, 5, 6, 7];
        $faker = app(Generator::class);

        Article::factory()->count(10)->create([
            'type' => $faker->randomElement($type)
        ]);
    }
}
