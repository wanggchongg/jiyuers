<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace Jiyuers\Models;

use Jiyuers\Base\Models\BaseModel as Model;
use Jiyuers\Models\Foundation\User;

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