<?php

namespace App\Models;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post{

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title,$excerpt,$date,$body,$slug){
        $this->title=$title;
        $this->excerpt=$excerpt;
        $this->body=$body;
        $this->date=$date;
        $this->slug=$slug;
    }


    public static function all(){

     return cache()->rememberForever('posts.all',function(){
         $files= File::files(resource_path("posts/"));
            return collect($files)
            ->map(function($files){
                $document=YamlFrontMatter::parseFile($files);
                
                return new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
                );
            })-> sortByDesc('date');
        });
}
    public static function find($slug){
            $posts=static::all();
            return $posts->firstWhere('slug',$slug);
    }
}
