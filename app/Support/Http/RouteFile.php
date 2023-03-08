<?php

namespace App\Support\Http;


abstract class RouteFile
{
    protected $options;

    protected $router;


    public function __construct($options = [])
    {
        $this->options = $options;
        $this->router = app('router');
        
    }
}