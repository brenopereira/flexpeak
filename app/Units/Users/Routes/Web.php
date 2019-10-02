<?php

namespace App\Units\Users\Routes;

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
        $this->usersRoutes();
    }

    /**
     * Rotes for users unit
     */
    protected function usersRoutes()
    {
        $this->router->get('/{any}', ['as' => 'users.index', 'uses' => function(){
            return view('core::default');
        }])->where('any', '.*');
    }
}
