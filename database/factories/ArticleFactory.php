<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date_time = $this->faker->date . ' ' . $this->faker->time;
        $text = $this->faker->text(1000);
        return [
            'title' => substr($text, 0, 40),
            'introduction' => substr($text, 0, 200),
            'content' => $text,
            'content_html' => '',
            'visits' => random_int(10, 200),
            'star' => random_int(10, 200),
            'created_at' => $date_time,
            'updated_at' => $date_time
        ];
    }
}
