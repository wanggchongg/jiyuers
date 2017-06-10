<?php

namespace Jiyuers\Http\Controllers;

use Someline\Base\Http\Controllers\Controller;
use Jiyuers\Models\Foundation\User;

abstract class BaseController extends Controller
{

    /**
     * @return User
     */
    public function getAuthUser()
    {
        return auth_user();
    }

}
