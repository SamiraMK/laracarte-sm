<?php

    if(! function_exists('page_title')){

        function page_title($title){
            $basetitle = config('app.name') ."- List of artisan";
            if($title === ''){
                return $basetitle;
            }else{
                return $title.' | '.$basetitle;
            }
        }
    }
    if(! function_exists('set_active_root')){
       function set_active_root($route){
          if($route == Route::currentRouteName()){
              return 'active';
          }
        } 
    }
    
?>