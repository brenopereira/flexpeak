<?php

namespace App\Domains\Users\Repositories;

use App\Domains\Users\Contracts\UserContract;
use App\Domains\Users\Entities\User;
use App\Support\Repository\AbstractRepository;
use Illuminate\Support\Str;

/**
 * Class UserRepository
 * @package App\Domains\Users\Repositories
 */
class UserRepository implements UserContract
{
    /**
     * @var AbstractRepository
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = new AbstractRepository($user);
    }

    public function all()
    {
        return $this->user->all();
    }

    public function create(array $array)
    {
        $array["nickname"] = Str::slug($array["name"]);
        $array["password"] = bcrypt($array["password"]);
        return $this->user->create($array);
    }

    public function paginate($items)
    {
        return $this->user->getModel()->paginate($items);
    }
}
