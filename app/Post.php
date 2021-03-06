<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'author', 'slug'];

    public const RELATIONSHIP_POST_CATEGORY = 'post_category';


    public function author(){
        return $this->belongsTo(User::class,'author','id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,self::RELATIONSHIP_POST_CATEGORY,'post','category');
    }
}
