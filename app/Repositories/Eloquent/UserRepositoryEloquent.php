<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\UserRepository;
use App\Models\User\User;
use App\Validators\UserValidator;
use App\Presenters\UserPresenter;

/**
 * Class UserRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return UserValidator::class;
    }


    /**
     * Specify Presenter class name
     *
     * @return mixed
     */
    public function presenter()
    {
        return UserPresenter::class;
    }

    /**
     * @param $criteria
     * @return $this
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function pushCriteria($criteria)
    {
        parent::resetCriteria();
        return parent::pushCriteria($criteria);
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
