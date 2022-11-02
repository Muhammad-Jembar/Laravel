<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use\App\Models\User;
use\App\Models\Category;
use\App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'Muhammad Jembar Risky',
            'email' => 'jembarrisky24@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Hifal',
            'email' => 'hifal24@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus odio ipsum nobis, velit a esse dolorum accusantium autem corrupti dolor labore molestiae asperiores suscipit atque sequi ipsam. Quam, delectus nostrum doloremque cum dolore, quibusdam iure nobis quae itaque dolorum magnam architecto dicta obcaecati, unde reiciendis at quas animi eaque dignissimos explicabo rem impedit. Corporis magnam recusandae ad pariatur doloribus repellendus amet voluptatibus impedit cupiditate dolorem iusto voluptas deleniti ducimus tenetur veritatis ea facilis eum dolorum, commodi id sunt nemo. Mollitia asperiores fuga, veritatis reprehenderit inventore dolore aperiam aut natus quae minima sapiente molestiae voluptatibus iure accusamus explicabo numquam, totam corporis.',
            'category_id' => 1,
            'user_id' => 1  
        ]);

        
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus odio ipsum nobis, velit a esse dolorum accusantium autem corrupti dolor labore molestiae asperiores suscipit atque sequi ipsam. Quam, delectus nostrum doloremque cum dolore, quibusdam iure nobis quae itaque dolorum magnam architecto dicta obcaecati, unde reiciendis at quas animi eaque dignissimos explicabo rem impedit. Corporis magnam recusandae ad pariatur doloribus repellendus amet voluptatibus impedit cupiditate dolorem iusto voluptas deleniti ducimus tenetur veritatis ea facilis eum dolorum, commodi id sunt nemo. Mollitia asperiores fuga, veritatis reprehenderit inventore dolore aperiam aut natus quae minima sapiente molestiae voluptatibus iure accusamus explicabo numquam, totam corporis.',
            'category_id' => 1,
            'user_id' => 1    
        ]);

        
        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus odio ipsum nobis, velit a esse dolorum accusantium autem corrupti dolor labore molestiae asperiores suscipit atque sequi ipsam. Quam, delectus nostrum doloremque cum dolore, quibusdam iure nobis quae itaque dolorum magnam architecto dicta obcaecati, unde reiciendis at quas animi eaque dignissimos explicabo rem impedit. Corporis magnam recusandae ad pariatur doloribus repellendus amet voluptatibus impedit cupiditate dolorem iusto voluptas deleniti ducimus tenetur veritatis ea facilis eum dolorum, commodi id sunt nemo. Mollitia asperiores fuga, veritatis reprehenderit inventore dolore aperiam aut natus quae minima sapiente molestiae voluptatibus iure accusamus explicabo numquam, totam corporis.',
            'category_id' => 2,
            'user_id' => 1      
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus odio ipsum nobis, velit a esse dolorum accusantium autem corrupti dolor labore molestiae asperiores suscipit atque sequi ipsam. Quam, delectus nostrum doloremque cum dolore, quibusdam iure nobis quae itaque dolorum magnam architecto dicta obcaecati, unde reiciendis at quas animi eaque dignissimos explicabo rem impedit. Corporis magnam recusandae ad pariatur doloribus repellendus amet voluptatibus impedit cupiditate dolorem iusto voluptas deleniti ducimus tenetur veritatis ea facilis eum dolorum, commodi id sunt nemo. Mollitia asperiores fuga, veritatis reprehenderit inventore dolore aperiam aut natus quae minima sapiente molestiae voluptatibus iure accusamus explicabo numquam, totam corporis.',
            'category_id' => 2,
            'user_id' => 2    
        ]);


    }
}
