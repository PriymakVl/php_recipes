<?php

class Controller_Base 
{
    public $layout = 'main_layout';

    public function render($content, $data = null) {
        View::render($this->layout, $content, $data);
    }

    public function addMessage($result, $type)
    {
        $key = $result ? 'ok' : 'error';
        Message::add($key, $type);
        return $this;
    }

    public function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    public function back() 
    {
        $url = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
        header('Location: ' . $url);
        exit;
    }
}