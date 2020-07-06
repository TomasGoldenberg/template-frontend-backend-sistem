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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute(){
        return substr($this->body, 0,140);
    }
}
