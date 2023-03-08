<?php

namespace App\Support\Http;

use Illuminate\Support\Facades\Route;

abstract class RouteFile
{
    protected $options;

    protected $router;


    public function __construct($options = [])
    {
        $this->options = $options;
        $this->router = app('router');
        
    }

    public function register()
    {
        Route::pattern('id', '[0-9]+');

        $this->router->group($this->options, function () {
            $this->routes();
        });
    }

    abstract protected function routes();
}