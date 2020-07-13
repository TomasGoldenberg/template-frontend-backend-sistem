<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstaAccount extends Model
{
    public function instagram(){
        return $this->belongsTo(Instagram::class);
    }
    protected $fillable = [
        "instagram_id","account"
    ];
}
