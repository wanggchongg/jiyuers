<?php

namespace Someline\Transformers;

use League\Fractal\TransformerAbstract;
use Someline\Models\UserExtend;

/**
 * Class UserExtendTransformer
 * @package namespace Someline\Transformers;
 */
class UserExtendTransformer extends TransformerAbstract
{

    /**
     * Transform the UserExtend entity
     * @param Someline\Models\UserExtend $model
     *
     * @return array
     */
    public function transform(UserExtend $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
