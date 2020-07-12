<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $fillable = [
        'category',
    ];

    public function instaDetails(){
        return $this->hasMany(InstaDetail::class);
    }
}
