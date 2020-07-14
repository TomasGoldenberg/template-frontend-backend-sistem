<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GmailAccount extends Model
{
    protected $fillable = [
        'account',"gmail_id"
    ];
    public function gmail(){
        return $this->belongsTo(Gmail::class);
    }
}
