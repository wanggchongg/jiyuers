<?php

namespace Someline\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Someline\Repositories\Interfaces\UserExtendRepository;
use Someline\Models\UserExtend;
use Someline\Validators\UserExtendValidator;

/**
 * Class UserExtendRepositoryEloquent
 * @package namespace Someline\Repositories\Eloquent;
 */
class UserExtendRepositoryEloquent extends BaseRepository implements UserExtendRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserExtend::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserExtendValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
