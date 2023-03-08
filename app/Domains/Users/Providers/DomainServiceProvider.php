<?php 

namespace App\Domains\Users\Providers;

use App\Support\Providers\ServiceProvider;

final class DomainServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerFactories();
    }

    protected function registerRoutes(): void
    {
        $this->app->register(RouteServiceProvider::class);
    }

    public function registerFactories(): void
    {
        //
    }

    protected function registerMigrations(): void
    {
        $this->loadMigrationsFrom('app/Domains/Users/Database/Migrations');
    }

}
