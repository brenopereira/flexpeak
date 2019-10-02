<?php
/**
 * UnitServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

/**
 * UnitServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Core\Providers;

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
    protected $alias = "core";

    /**
     * @var bool
     */
    protected $hasView = true;

    /**
     * @var array
     */
    protected $providers = [
        CoreServiceProvider::class
    ];
}
