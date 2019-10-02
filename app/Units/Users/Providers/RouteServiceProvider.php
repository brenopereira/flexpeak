<?php

namespace App\Units\Users\Providers;

use App\Units\Users\Routes\Web;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = "App\Units\Users\Http\Controllers";

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        (new Web([
            'middleware' => ['web'],
            'namespace' => $this->namespace,
        ]))->register();
    }
}
