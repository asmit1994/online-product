<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class UserController
 * @package App\Http\Controllers\Backend
 */
class UserController extends Controller
{
    /**
     * @var User
     */
    private $users;

    /**
     * UserController constructor.
     * @param User $users
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->users->all();

        return view('admin.users.index',compact('users'));
    }
}
