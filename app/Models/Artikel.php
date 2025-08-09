<?php

namespace App\Models;

class Artikel
{
    private static $blog_posts = [
        [
            "title" => "Citra 8 Sunset Avenue",
            "slug" => "citra-8-sunset-avenue",
            "comment" => "menikmati syahdunya danau cipan",
            "img" => "images/cipan2.jpeg"
       
        ],

        [
            "title" => "MRT Jakarta",
            "slug" => "mrt-jakarta",
            "comment" => "The quiet of MRT mungkin judul yang cocok",
            "img" => "images/mrt1.jpeg"
        ],

    ];

    public static function all(){
        return self::$blog_posts;
    }
    
    public static function titles($title){
        $titles = self::$blog_posts;
        $new_title = [];
        foreach($titles as $t){
          if($p["title"] === $title){
            $new_title = $t;
          }
        }
          return $new_title;
    }

    public static function find($slug){
        $posts = self::$blog_posts;
        $new_post = [];
        foreach($posts as $p){
            if($p["slug"] === $slug){
            $new_post = $p;
        }
    }
        return $new_post;
    }
}
