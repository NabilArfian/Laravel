<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'article';

    public function article(){
        return $this->belongsTo('App/Category');
    }
}




