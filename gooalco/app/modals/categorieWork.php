<?php

namespace App\modals;

use Illuminate\Database\Eloquent\Model;

class categorieWork extends Model
{
    public function works()
    {
        return $this->hasMany('App\Work');
    }
}
