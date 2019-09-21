<?php

namespace App\modals;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function SubMenus()
    {
        return $this->hasMany('App\SubMenu');
    }
}
