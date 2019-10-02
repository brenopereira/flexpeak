<?php
/**
 * CoreServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Core\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

/**
 * Class CoreServiceProvider
 * @package App\Units\Users\Providers
 */
class CoreServiceProvider extends ServiceProvider
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
