<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\UserExtendRepository;
use App\Models\User\UserExtend;
use App\Validators\UserExtendValidator;

/**
 * Class UserExtendRepositoryEloquent
 * @package namespace \App\Repositories\Eloquent;
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
