<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\BaseController;

class UserController extends BaseController
{

    public function getUserList()
    {
        return view('mobile.users.user_list');
    }

    public function getUserDetail($id)
    {
        return view('mobile.users.user_detail', [
            'user_id' => $id,
        ]);
    }

}