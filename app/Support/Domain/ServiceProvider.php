<?php

namespace App\Support\Domain;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Migrator\MigratorTrait as HasMigrations;
use ReflectionClass;

/**
 * Class ServiceProvider
 * @package App\Support\Domain
 */
abstract class ServiceProvider extends LaravelServiceProvider
{
    use HasMigrations;

    /**
     * @var
     */
    protected $alias;

    /**
     * @var
     */
    protected $providers;

    /**
     * @var array
     */
    public $bindings = [];

    /**
     * @var array
     */
    protected $migrations = [];

    /**
     * @var array
     */
    protected $seeders = [];

    /**
     * @var array
     */
    protected $factories = [];

    /**
     * @var bool
     */
    protected $hasTranslations = false;

    /**
     *
     * @throws \ReflectionException
     */
    public function boot()
    {
        if($this->hasTranslations) $this->registerTranslates();
    }

    /**
     *
     */
    public function register()
    {
        $this->registerProviders(collect($this->providers));
        $this->registerBindings(collect($this->bindings));
        $this->registerMigrations(collect($this->migrations));
        $this->registerSeeders(collect($this->seeders));
        $this->registerFactories(collect($this->factories));
    }

    /**
     * @param Collection $providers
     */
    protected function registerProviders(Collection $providers){
        $providers->each(function($provider){
            $this->app->register($provider);
        });
    }

    /**
     * @param Collection $bindings
     */
    protected function registerBindings(Collection $bindings){
        $bindings->each(function($binding){
            $this->app->bind($binding);
        });
    }

    /**
     * @param Collection $migrations
     */
    protected function registerMigrations(Collection $migrations){
        $this->migrations($migrations->all());
    }

    /**
     * @param Collection $seeders
     */
    protected function registerSeeders(Collection $seeders){
        $this->seeders($seeders->all());
    }

    /**
     * @param Collection $factories
     */
    protected function registerFactories(Collection $factories){
        $factories->each(function($factoryName){
            (new $factoryName())->define();
        });
    }

    /**
     * Register domain translations.
     * @throws \ReflectionException
     */
    protected function registerTranslates(){
        $this->loadTranslationsFrom(
            $this->domainPath('Resources/Lang'),
            $this->alias
        );
    }

    /**
     * @param string $append
     * @return string
     * @throws \ReflectionException
     */
    protected function domainPath($append = null)
    {
        $reflection = new ReflectionClass($this);
        $realPath = realpath(dirname($reflection->getFileName()).'/../');

        if(!$append){
            return $realPath;
        }

        return $realPath.'/'.$append;
    }
}
