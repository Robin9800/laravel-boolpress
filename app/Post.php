<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug'];

    //Prende una stringa in input e ritorna una versione slug univoca
    public static function convertToSlug($title)
    {
        $slugPrefix = Str::slug($title);
        $slug = $slugPrefix;
        $postFound = Post::where('slug', $slug)->first();
        $counter = 1;

        while ($postFound) {
            $slug = $slugPrefix . '_' . $counter;
            $counter++;
            $postFound = Post::where('slug', $slug)->first();
        }

        return $slug;
    }
}
