<?php
/**
 * ModelFactory.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Support\Domain;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factory;

/**
 * Class ModelFactory
 * @package App\Support\Domain
 */
abstract class ModelFactory
{

    /**
     * @var mixed
     */
    protected $factory;

    /**
     * @var
     */
    protected $model;

    /**
     * @var
     */
    protected $faker;

    /**
     * ModelFactory constructor.
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->faker = app()->make(Generator::class);
    }

    /**
     * Return fields
     */
    public function define()
    {
        $this->factory->define($this->model, function () {
            return $this->fields();
        });
    }

    /**
     * @return mixed
     */
    abstract public function fields();
}
