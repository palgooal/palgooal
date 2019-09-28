<?php

namespace App\modals;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slug;

class Page extends Model
{
    protected $fillable = ['slug','title_ar', 'title_en','content_ar', 'content_en'];
    // public function setTitleAttribute($value)
    // {
    //     $this->attributes['title_en']= $value;
    //     $this->attributes['slug'] = slug::uniqslug($value, ('pages'));
    // }
}
