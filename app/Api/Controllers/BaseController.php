<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace Jiyuers\Api\Controllers;

use Jiyuers\Base\Api\Controllers\Controller;
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