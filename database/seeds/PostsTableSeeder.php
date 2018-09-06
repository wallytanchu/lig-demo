<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Post::truncate();


        $faker = \Faker\Factory::create();

        $photos = [
            'assets/images/sample1.jpg', 
            'assets/images/sample2.jpg', 
            'assets/images/sample3.jpg', 
            'assets/images/sample4.jpg', 
            'assets/images/sample5.jpg' 
        ];
        $index =0;

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'inquiry' => $faker->paragraph,
                'photo' => $photos[$index]
            ]);

            if($index == 4) {
                $index = 0;
            } else {
                $index++;
            }
        }
    }
}
