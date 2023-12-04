<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post  
{
 private static $blog_posts = [
    [
    "title" => "Judul 1",
    "slug" => "tulisan-1",
    "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint voluptate delectus atque totam eum odio eveniet fuga porro amet, nobis tempore praesentium repellat, aperiam quibusdam dolore nam rem quos rerum consequatur expedita commodi. Aliquam accusamus temporibus porro enim, quis ipsa, delectus adipisci iusto tenetur, consectetur saepe aperiam. Sint, cum molestiae ab ad explicabo nihil excepturi quaerat quas blanditiis labore at! Sequi maiores laboriosam quasi saepe voluptates laborum nemo beatae tempore pariatur rem id veniam nam officia veritatis, consequuntur dolorum. Tenetur, ipsa non hic corporis amet nihil iste neque natus numquam!"
    ],
    [
    "title" => "Judul 2",
    "slug" => "tulisan-2",
    "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint voluptate delectus atque totam eum odio eveniet fuga porro amet, nobis tempore praesentium repellat, aperiam quibusdam dolore nam rem quos rerum consequatur expedita commodi. Aliquam accusamus temporibus porro enim, quis ipsa, delectus adipisci iusto tenetur, consectetur saepe aperiam. Sint, cum molestiae ab ad explicabo nihil excepturi quaerat quas blanditiis labore at! Sequi maiores laboriosam quasi saepe voluptates laborum nemo beatae tempore pariatur rem id veniam nam officia veritatis, consequuntur dolorum. Tenetur, ipsa non hic corporis amet nihil iste neque natus numquam!"
  ]
  
    ];
      public static function all()
      {
                return collect(self::$blog_posts);
     }

     public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug' , $slug);
     }
  }