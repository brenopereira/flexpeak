<?php

namespace App\Units\Users\Providers;

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
    protected $alias = "users";

    /**
     * @var bool
     */
    protected $hasView = true;

    /**
     * @var array
     */
    protected $providers = [
        RouteServiceProvider::class,
        UserServiceProvider::class
    ];
}
