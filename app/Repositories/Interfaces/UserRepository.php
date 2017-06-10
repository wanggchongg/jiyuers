<?php

namespace Jiyuers\Repositories\Interfaces;

use Jiyuers\Repositories\Interfaces\BaseRepositoryInterface;

/**
 * Interface UserRepository
 * @package namespace Jiyuers\Repositories\Interfaces;
 */
interface UserRepository extends BaseRepositoryInterface
{
    /**
     * @param array|Collection $userIds
     * @return $this
     */
    public function byUserIds($userIds);
}
