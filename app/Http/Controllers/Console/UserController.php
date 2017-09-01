<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\BaseController;

class UserController extends BaseController
{

    public function getUserList()
    {
        return view('console.users.user_list');
    }

}