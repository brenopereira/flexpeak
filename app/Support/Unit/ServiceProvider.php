<?php

namespace App\Support\Unit;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use ReflectionClass;

/**
 * Class ServiceProvider
 * @package App\Support\Unit
 */
abstract class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var array list of unit service providers to register
     */
    protected $providers = [];

    /**
     * @var string unit alias for translations and views
     */
    protected $alias;

    /**
     * @var bool enable views loading on the unit
     */
    protected $hasView = false;

    /**
     * @throws \ReflectionException
     */
    public function boot()
    {
        $this->registerViews();
        Schema::defaultStringLength(191);
    }

    /**
     * Register providers in unit
     */
    public function register()
    {
        $this->registerProviders(collect($this->providers));
    }

    /**
     * @param Collection $providers
     */
    public function registerProviders(Collection $providers)
    {
        $providers->each(function($provider){
            $this->app->register($provider);
        });
    }

    /**
     * @throws \ReflectionException
     */
    public function registerViews()
    {
        if ($this->hasView) {
            $this->loadViewsFrom(
                $this->unitPath('Resources/Views'),
                $this->alias
            );
        }
    }

    /**
     * @param string $append
     * @return string
     * @throws \ReflectionException
     */
    protected function unitPath($append = null)
    {
        $reflection = new ReflectionClass($this);
        $realPath = realpath(dirname($reflection->getFileName()) . '/../');

        if (!$append) {
            return $realPath;
        }

        return $realPath . '/' . $append;
    }
}
