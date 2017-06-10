<?php

namespace Jiyuers\Presenters;

use Jiyuers\Transformers\UserTransformer;

/**
 * Class UserPresenter
 *
 * @package namespace Jiyuers\Presenters;
 */
class UserPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserTransformer();
    }
}
