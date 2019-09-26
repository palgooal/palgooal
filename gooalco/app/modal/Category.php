<?php

namespace App\modal;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function works()
    {
        return $this->belongsToMany('App\Work');
    }
}
