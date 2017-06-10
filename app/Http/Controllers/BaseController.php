<?php

namespace Jiyuers\Http\Controllers;

use Jiyuers\Base\Http\Controllers\Controller;
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
