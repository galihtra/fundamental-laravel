<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => ' personal'
        ]);

        Post::factory(20)->create();

        // Tanpa Faker

        User::create([
            'name' => 'Galih Tra',
            'username' => 'galih',
            'email' => 'galih@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'Sandhika',
        //     'email' => 'sandhika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // Post::create([
        //     'title' => "Judul Pertama",
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => "judul-pertama",
        //     'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
        // ]);

        // Post::create([
        //     'title' => "Judul Kedua",
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => "judul-kedua",
        //     'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
        // ]);

        // Post::create([
        //     'title' => "Judul Ketiga",
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => "judul-ketiga",
        //     'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
        // ]);

        // Post::create([
        //     'title' => "Judul Keempat",
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => "judul-keempat",
        //     'excerpt' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, dolore.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias error ad placeat hic dolore ipsa natus, quia libero veritatis.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae nobis itaque enim deleniti quibusdam at est iste impedit natus!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem earum quasi fuga? Est ad sed cum. Debitis, suscipit fugit. Fuga.</p>"
        // ]);

    }
}
