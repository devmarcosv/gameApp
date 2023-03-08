<?php 

namespace App\Support\Providers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;

abstract class ServiceProvider extends SupportServiceProvider
{
    protected function registerEloquentFactoriesFrom($path)
    {
        try{
            $this->app->make(Factory::class)->load($path);
        }catch(BindingResolutionException $e){

        }
    }
}