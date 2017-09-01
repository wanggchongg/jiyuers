<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace App\Models;

use App\Base\Models\BaseModel as Model;
use App\Models\Foundation\User;

class BaseModel extends Model
{

    /**
     * @return User|null
     */
    public function getUser()
    {
        return parent::getUser();
    }

    /**
     * @return User|null
     */
    public function getAuthUser()
    {
        return parent::getAuthUser();
    }

    /**
     * @return User|null
     */
    public function getRelatedUser()
    {
        return $this->related_user;
    }


}