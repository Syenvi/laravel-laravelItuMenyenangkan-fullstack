<?php

namespace App\Models;

class Post
{
    private static  $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Syahdin Raditya",
            "slug" => "judul-post-pertama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae beatae natus aut similique ad enim tenetur quas nihil voluptates modi!"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Rafi Zimraan",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente minima accusamus eos dolore adipisci placeat quibusdam culpa temporibus dignissimos debitis vero harum inventore, facilis vitae tenetur ipsum beatae ex voluptatem expedita dolor obcaecati. Illum obcaecati accusamus quo iste eaque deleniti, hic tempora ab voluptate ipsam accusantium vero. Ab, consequatur alias?"
        ],

    ];

    public static function all ()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $newPost = [];
        // foreach($posts as $post){
        //     if($post["slug"] === $slug){
        //         $newPost = $post;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
