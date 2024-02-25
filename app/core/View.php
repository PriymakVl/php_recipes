<?php

class View 
{
    public static function render($template, $data = null)
    {
        if(is_array($data)){
            extract($data);
        }

        $template_path = "app/views/" . $template . ".php";

        include "app/views/layouts/main_layout.php"; 
    }
    public static function admin($template, $data = null)
    {
        if(is_array($data)){
            extract($data);
        }

        $template_path = "app/views/" . $template . ".php";

        include "app/views/layouts/admin_layout.php"; 
    }

}