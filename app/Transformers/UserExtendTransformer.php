<?php

namespace App\Transformers;

use App\Models\User\UserExtend;

/**
 * Class UserExtendTransformer
 * @package namespace Someline\Transformers;
 */
class UserExtendTransformer extends BaseTransformer
{

    /**
     * Transform the UserExtend entity
     * @param \App\Models\User\UserExtend $model
     *
     * @return array
     */
    public function transform(UserExtend $model)
    {
        return $model->toArray();
    }
}
