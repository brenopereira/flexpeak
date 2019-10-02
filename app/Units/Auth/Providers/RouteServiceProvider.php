<?php
/**
 * RouteServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Auth\Providers;

use App\Units\Auth\Routes\Web;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

/**
 * Class RouteServiceProvider
 * @package App\Units\Auth\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $namespace = "App\Units\Auth\Http\Controllers";

    /**
     * Boot routes created in application
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Return map from routes and register
     */
    public function map()
    {
        $this->mapWebRoutes();
    }

    /**
     * Register class from routes
     */
    protected function mapWebRoutes()
    {
        (new Web([
            'middleware' => ['web'],
            'namespace' => $this->namespace,
            'prefix' => 'auth'
        ]))->register();
    }
}
