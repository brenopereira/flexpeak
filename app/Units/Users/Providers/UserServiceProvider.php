<?php

namespace App\Units\Users\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

/**
 * Class UserServiceProvider
 * @package App\Units\Users\Providers
 */
class UserServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $policies = [];

    public function boot()
    {
        $this->registerPolicies();
    }
}
