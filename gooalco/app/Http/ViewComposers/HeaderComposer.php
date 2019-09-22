<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\modals\Menu;



class HeaderComposer
{
    // public function compose(View $view)
    // {
        
    //     $view->with('menus', Menu::orderBy('sort', 'DESC')->get());
        
    // }

   
    protected $menus;
    

    public function __construct()
    {
      $this->menus =  Menu::orderBy('sort', 'DESC')->git();
      
      
    }
 
     public function compose(View $view)
     {        
         return $view->with('menus', $this->menus);
     }

    
}