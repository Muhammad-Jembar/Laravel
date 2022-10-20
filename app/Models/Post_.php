<?php

namespace App\Models;


class Post 
{
   private static $blog_post =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jembar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus expedita, nam quod enim consectetur, id explicabo inventore aspernatur ea, nisi impedit necessitatibus dolores esse nobis. Facilis excepturi possimus sunt dicta beatae fugiat repellat corrupti ab perspiciatis eveniet numquam, ipsam blanditiis consequuntur unde saepe exercitationem veniam culpa porro accusantium nulla, dolorem quaerat. Sequi, nobis autem, sint dicta ea a, assumenda cum perferendis aut corrupti facilis laborum! Quod incidunt tempora atque voluptate? Aspernatur fugiat odit itaque nemo magni, maiores sint tempore eaque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hifal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo quod perspiciatis ad porro labore. Nulla, magni itaque possimus sunt earum perferendis optio, dicta nostrum sit tempore, atque molestiae veritatis esse vel? Accusantium accusamus similique est ab eveniet vero laboriosam beatae id, animi eaque architecto veniam autem dolor soluta? Velit voluptas sunt incidunt rerum dolorum exercitationem placeat eveniet iste, voluptates voluptate atque provident quia ab at officia necessitatibus tenetur repudiandae. Ipsum facere quasi molestiae voluptas voluptatem minima, dolor officia eum voluptatum veritatis omnis laudantium harum at sapiente beatae blanditiis est. Nesciunt quo sunt nihil delectus, impedit qui hic reprehenderit facere modi!"
        ],
    ];


   public static function all() {
    
    return collect(self::$blog_post);

   }


   public static function find($slug) {

   $posts = static::all();

  //    $post = [];

  //  foreach($posts as $a) {
  //   if($a["slug"] === $slug) {
  //         $post = $a;
  //     }
  //   }
    
    return $posts->firstwhere('slug', $slug);

   }

}
