<?php

namespace App\Http\Controllers;

use Someline\Base\Http\Controllers\Controller;
use App\Models\Foundation\User;

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
