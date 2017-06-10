<?php

namespace Jiyuers\Http\Controllers\Console;

use Jiyuers\Http\Controllers\BaseController;

class UserController extends BaseController
{

    public function getUserList()
    {
        return view('console.users.user_list');
    }

}