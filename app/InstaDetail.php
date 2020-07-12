<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstaDetail extends Model
{

    protected $fillable = [
        'comment',"instagram_id","message","account"
    ];
    public function instagram(){
        return $this->belongsTo(Instagram::class);
    }
}
