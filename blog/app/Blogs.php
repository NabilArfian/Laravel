<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'member';

    public function member(){
        return $this->belongsTo('App\Member');
    }
}
