<?php

class Controller_Base 
{
    public function addMessage($key, $type)
    {
        Message::add($key, $type);
        return $this;
    }

    public function redirect($url, $params = null)
    {
        $get_param = "?";
        if($params != null) {
            foreach($params as $key => $value) {
                $get_param .= $key . "=" . $value . "&";
            }
        }    
        $url = $url . substr($get_param, 0, -1);
        header("Location: $url");
        exit;
    }
}