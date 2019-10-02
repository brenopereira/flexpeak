<?php
/**
 * UnitServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Auth\Providers;

use App\Support\Unit\ServiceProvider;

/**
 * Class UnitServiceProvider
 * @package App\Units\Users\Providers
 */
class UnitServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = "auth";

    /**
     * @var bool
     */
    protected $hasView = true;

    /**
     * @var array
     */
    protected $providers = [
        RouteServiceProvider::class,
        AuthServiceProvider::class
    ];
}
