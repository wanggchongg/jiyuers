<?php

namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\BaseRepositoryInterface;

/**
 * Interface UserRepository
 * @package namespace App\Repositories\Interfaces;
 */
interface UserRepository extends BaseRepositoryInterface
{
    public function isExistWithPhone($phoneNumber);
}
