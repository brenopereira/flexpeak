<?php
/**
 * DomainServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Domains\Users\Providers;

use App\Domains\Users\Contracts\UserContract;
use App\Domains\Users\Database\Factories\CreateUserFactory;
use App\Domains\Users\Database\Seeders\CreateUserSeeder;
use App\Domains\Users\Database\Migrations\CreateUserTable;
use App\Domains\Users\Repositories\UserRepository;
use App\Support\Domain\ServiceProvider;

/**
 * Class DomainServiceProvider.
 *
 * Register Lead Domain Resources and Services
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string Domain "alias"
     */
    protected $alias = 'users';

    /**
     * @var bool Enable translations
     */
    protected $hasTranslations = false;

    /**
     * @var array Bind contracts to implementations
     */
    public $bindings = [
        UserContract::class => UserRepository::class
    ];

    /**
     * @var array Migrations of this domains
     */
    protected $migrations = [
        CreateUserTable::class
    ];

    /**
     * @var array Factories of this domains
     */
    protected $factories = [
        CreateUserFactory::class
    ];

    /**
     * @var array Some Seeders
     */
    protected $seeders = [
        CreateUserSeeder::class
    ];
}
