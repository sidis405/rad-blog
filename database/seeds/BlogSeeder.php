<?php

use App\Tag;
use App\Post;
use App\User;
use App\Video;
use App\Category;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class, 5)->create();
        $users = factory(User::class, 3)->create();

        $tags = factory(Tag::class, 15)->create();

        foreach ($users as $user) {
            for ($i=0; $i < 10; $i++) {
                $post = factory(Post::class)->create([
                    'user_id' => $user->id,
                    'category_id' => $categories->random()->id,
                ]);

                $tag_ids = $tags->pluck('id')->random(3);

                $post->tags()->sync($tag_ids);
            }

            for ($i=0; $i < 3; $i++) {
                factory(Video::class)->create([
                    'user_id' => $user->id,
                    'category_id' => $categories->random()->id,
                ]);
            }
        }
    }
}
