<?php
/**
 * Migration.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Support\Domain;

use Illuminate\Database\Migrations\Migration as LaravelMigration;

/**
 * Class Migration
 * @package App\Support\Domain
 */
abstract class Migration extends LaravelMigration
{
    /**
     * @var
     */
    protected $schema;

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    /**
     * Run the migration
     * @return mixed
     */
    abstract public function up();

    /**
     * Reverse the migration
     * @return mixed
     */
    abstract public function down();
}
