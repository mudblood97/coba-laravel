<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    //use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ivan Harsono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ut, doloribus magnam explicabo ratione minus autem ipsam! Quis provident, explicabo incidunt unde doloremque excepturi perspiciatis exercitationem corporis reprehenderit quasi possimus! Magnam minima natus sapiente molestias voluptatibus qui pariatur delectus laboriosam dolor rerum quod accusantium, architecto in obcaecati aspernatur ullam odit porro quo reprehenderit aperiam debitis? Dolorem, dicta id? Consequatur asperiores, repellendus libero non vero sed autem, atque ut sit minus vitae. Animi sint debitis maiores, quas veniam officiis quo saepe."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jojo Wiobo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolore voluptas sed amet cumque maiores odio, ratione saepe rerum quod porro hic ab libero minus maxime consectetur fuga nihil suscipit vitae ex deserunt voluptatibus alias. Deserunt reprehenderit sint beatae architecto modi, dignissimos officia quaerat aut harum, est quod esse, suscipit voluptas explicabo repellat ipsum consequatur debitis dolores molestiae velit quas expedita nam? Odio perspiciatis nisi quis aliquid dolore id quam explicabo neque at temporibus repellendus quasi reprehenderit magnam illo consectetur rerum commodi, itaque fugit saepe molestiae corporis, accusamus quo necessitatibus quisquam? Beatae perspiciatis ipsum laudantium quos saepe nihil explicabo soluta?"
        ]
    ];

    public static function all(){

        return collect(self::$blog_posts);
    }

    public static function find($slug){

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
