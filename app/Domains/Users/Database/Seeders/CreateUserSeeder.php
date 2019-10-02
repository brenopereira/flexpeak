<?php
/**
 * CreateUserSeeder.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Domains\Users\Database\Seeders;

use App\Domains\Users\Entities\User;
use Illuminate\Database\Seeder;

/**
 * Class CreateUserSeeder.
 */
class CreateUserSeeder extends Seeder
{
    /**
     * @todo improve users seeders
     */
    public function run()
    {
        factory(User::class)->times(1)->create();
    }
}
