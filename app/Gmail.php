<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gmail extends Model
{
    protected $fillable = [
        'category',
    ];

    public function gmailDetails(){
        return $this->hasMany(GmailDetail::class);
    }
}
