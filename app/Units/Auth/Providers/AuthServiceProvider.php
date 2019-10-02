<?php
/**
 * AuthServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Auth\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

/**
 * Class UserServiceProvider
 * @package App\Units\Users\Providers
 */
class AuthServiceProvider extends ServiceProvider
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
