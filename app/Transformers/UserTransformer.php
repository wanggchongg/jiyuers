<?php

namespace App\Transformers;

use App\Models\User\User;

/**
 * Class UserTransformer
 * @package namespace App\Transformers;
 */
class UserTransformer extends BaseTransformer
{
    /**
     * @param User $model
     * @return array
     */
    public function transform(User $model)
    {
        return $model->toArray();
    }
}
