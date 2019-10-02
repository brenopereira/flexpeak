<?php
/**
 * Api.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Auth\Routes;

use App\Support\Http\Routing\RouteFile;

/**
 * Class Web
 * @package App\Units\Users\Routes
 */
class Web extends RouteFile
{
    /**
     * @return mixed|void
     */
    public function routes()
    {
        $this->authRoutes();
    }

    /**
     * Rotes for auth unit
     */
    protected function authRoutes()
    {
        $this->router->get('/login', ['as' => 'auth.login.index', 'uses' => 'LoginController@index']);
        $this->router->post('/login', ['as' => 'auth.login.store', 'uses' => 'LoginController@store']);
        $this->router->get('/logout', ['as' => 'auth.login.logout', 'uses' => 'LoginController@logout']);
    }
}
