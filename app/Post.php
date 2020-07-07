<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                "onUpdate" => true
            ]
        ];
    }

    protected $fillable = [
        'title', 'image', 'body', "iframe","user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute(){
        return substr($this->body, 0,140);
    }

    public function getGetImageAttribute(){
        if($this->image)
            return url("storage/$this->image");            
    }

    public function scopeTitle($query,$title){
        if($title){                              //insertamos el param
            return $query->where("title","LIKE", "%$title%" );
        }
    }

    public function scopeBody($query,$body){
        if($body){                              //insertamos el param
            return $query->where("body","LIKE", "%$body%" );
        }
    }
}
