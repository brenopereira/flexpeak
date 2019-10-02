<?php

namespace App\Units\Users\Http\Controllers;

use App\Domains\Users\Contracts\UserContract;
use App\Domains\Users\Entities\User;
use App\Support\Http\Controller;
use App\Units\Users\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Units\Users\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * @var UserContract
     */
    private $user;

    public function __construct(UserContract $user)
    {
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->user->paginate(10);
        return view('users::index')->with(['users' => $users]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('users::create');
    }

    public function store(UserCreateRequest $request)
    {
        $this->user->create($request->all());
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        return view('users::edit')->with(['user' => User::find($id)]);
    }

    public function update($id, Request $request)
    {
        if($request->has('passowrd')){
            User::find($id)->update($request->except('password') + ['passowrd' => bcrypt($request->get('password'))]);
        } else {
            User::find($id)->update($request->except('password'));
        }

        return redirect()->route('users.index');
    }
}
