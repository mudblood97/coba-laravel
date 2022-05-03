<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Ivan Harsono',
            'email' => 'ivanharsono111@gmail.com',
            'password' =>  bcrypt('qwerty')
        ]);

        User::create([
            'name' => 'Jojo Wiobo',
            'email' => 'jojo.wiobo@gmail.com',
            'password' =>  bcrypt('qwerty')
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
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia quaerat tempora perspiciatis harum,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo repellendus facere cum distinctio mollitia odit voluptate, aliquid numquam impedit ipsam accusamus quasi aperiam nesciunt obcaecati molestiae natus soluta asperiores consequatur quisquam esse, quia, unde ex eveniet officia? Dignissimos accusantium voluptatibus aspernatur reprehenderit, ipsum deleniti omnis totam corrupti accusamus mollitia expedita quidem cumque rerum.</p><p>Dolore voluptatem dignissimos fuga beatae unde, perspiciatis doloribus repellendus ipsam cupiditate rerum obcaecati iure saepe consequuntur minima! Ea suscipit ducimus id nesciunt corrupti libero tempore, voluptate consequatur commodi nostrum deleniti praesentium consectetur unde sit molestias quasi. Neque pariatur cumque, aut laudantium quasi officiis cum aliquam, numquam natus ipsa provident animi autem esse vel et quaerat sint aliquid eos quibusdam ab, aspernatur excepturi minima minus. Repudiandae, alias recusandae?</p>'
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia quaerat tempora perspiciatis harum,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo repellendus facere cum distinctio mollitia odit voluptate, aliquid numquam impedit ipsam accusamus quasi aperiam nesciunt obcaecati molestiae natus soluta asperiores consequatur quisquam esse, quia, unde ex eveniet officia? Dignissimos accusantium voluptatibus aspernatur reprehenderit, ipsum deleniti omnis totam corrupti accusamus mollitia expedita quidem cumque rerum.</p><p>Dolore voluptatem dignissimos fuga beatae unde, perspiciatis doloribus repellendus ipsam cupiditate rerum obcaecati iure saepe consequuntur minima! Ea suscipit ducimus id nesciunt corrupti libero tempore, voluptate consequatur commodi nostrum deleniti praesentium consectetur unde sit molestias quasi. Neque pariatur cumque, aut laudantium quasi officiis cum aliquam, numquam natus ipsa provident animi autem esse vel et quaerat sint aliquid eos quibusdam ab, aspernatur excepturi minima minus. Repudiandae, alias recusandae?</p>'
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia quaerat tempora perspiciatis harum,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo repellendus facere cum distinctio mollitia odit voluptate, aliquid numquam impedit ipsam accusamus quasi aperiam nesciunt obcaecati molestiae natus soluta asperiores consequatur quisquam esse, quia, unde ex eveniet officia? Dignissimos accusantium voluptatibus aspernatur reprehenderit, ipsum deleniti omnis totam corrupti accusamus mollitia expedita quidem cumque rerum.</p><p>Dolore voluptatem dignissimos fuga beatae unde, perspiciatis doloribus repellendus ipsam cupiditate rerum obcaecati iure saepe consequuntur minima! Ea suscipit ducimus id nesciunt corrupti libero tempore, voluptate consequatur commodi nostrum deleniti praesentium consectetur unde sit molestias quasi. Neque pariatur cumque, aut laudantium quasi officiis cum aliquam, numquam natus ipsa provident animi autem esse vel et quaerat sint aliquid eos quibusdam ab, aspernatur excepturi minima minus. Repudiandae, alias recusandae?</p>'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia quaerat tempora perspiciatis harum,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo repellendus facere cum distinctio mollitia odit voluptate, aliquid numquam impedit ipsam accusamus quasi aperiam nesciunt obcaecati molestiae natus soluta asperiores consequatur quisquam esse, quia, unde ex eveniet officia? Dignissimos accusantium voluptatibus aspernatur reprehenderit, ipsum deleniti omnis totam corrupti accusamus mollitia expedita quidem cumque rerum.</p><p>Dolore voluptatem dignissimos fuga beatae unde, perspiciatis doloribus repellendus ipsam cupiditate rerum obcaecati iure saepe consequuntur minima! Ea suscipit ducimus id nesciunt corrupti libero tempore, voluptate consequatur commodi nostrum deleniti praesentium consectetur unde sit molestias quasi. Neque pariatur cumque, aut laudantium quasi officiis cum aliquam, numquam natus ipsa provident animi autem esse vel et quaerat sint aliquid eos quibusdam ab, aspernatur excepturi minima minus. Repudiandae, alias recusandae?</p>'
        ]);
    }
}
