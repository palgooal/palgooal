<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    public function Menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
