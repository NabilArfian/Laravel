<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'jenismember';

    public function member(){
        return $this->hasMany('App\Blogs');
    }
}
