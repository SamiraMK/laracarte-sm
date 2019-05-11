<?php
    if(! function_exists('page_title')){

        function page_title($title){
            $basetitle = "Laracarte - List of artisan";
            if($title === ''){
                return $basetitle;
            }else{
                return $title.' | '.$basetitle;
            }
        }
    }
?>