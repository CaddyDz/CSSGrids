<?php

use Fresh\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    protected $post;
    protected $faker;
    public function __construct(Post $post, Faker $faker)
    {
        $this->post = $post;
        $this->faker = $faker;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $x) {
            $this->post->create([
                'title' => $this->faker->sentence(10),
                'body' => $this->faker->sentence(30),
            ]);
        }
    }
}
