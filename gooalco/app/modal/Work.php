<?php

namespace App\modal;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function categorys()
    {
        return $this->belongsToMany('App\Category');
    }
}
