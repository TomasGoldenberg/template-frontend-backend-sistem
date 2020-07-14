<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GmailDetail extends Model
{
    protected $fillable = [
        'message',"gmail_id"
    ];

    public function gmail(){
        return $this->belongsTo(Gmail::class);
    }
}
