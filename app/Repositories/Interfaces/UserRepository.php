<?php

namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\BaseRepositoryInterface;

/**
 * Interface UserRepository
 * @package namespace App\Repositories\Interfaces;
 */
interface UserRepository extends BaseRepositoryInterface
{
    /**
     * @param array|Collection $userIds
     * @return $this
     */
    public function byUserIds($userIds);
}
