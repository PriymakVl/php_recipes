<?php

class Message 
{
    public static function add($value, $key)
    {
        $_SESSION['mess'][$key] = $value;
    }

    public static function  display() 
    {
        if(empty($_SESSION['mess'])) return;

        $key = key($_SESSION['mess']);
        $message = self::getMessage($key);
        unset($_SESSION['mess']);
        if($key == 'ok') {
            return '<div class="alert alert-success mt-3" >' . $message . '</div>';
        }
        else{
            return '<div class="alert alert-danger mt-3 ">' . $message . '</div>';
        }
    }

    private static function getMessage($key)
    {
        $messages = include 'messages.php';
        return $messages[$key][$_SESSION['mess'][$key]];

    }
}