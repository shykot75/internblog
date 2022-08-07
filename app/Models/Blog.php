<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
    ];

    private static $blog;

    public static function newBlog($request){
        self::$blog = new Blog();
        self::$blog->title =$request->title;
        self::$blog->slug = $request->slug;
        self::$blog->description =$request->description;
        self::$blog->save();

    }

    public static function updateBlog($request, $id){
        self::$blog = Blog::find($id);
        self::$blog->title =$request->title;
        self::$blog->slug = $request->slug;
        self::$blog->description =$request->description;
        self::$blog->save();
    }






}
