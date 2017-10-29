<?php

namespace Someline\Presenters;

use Someline\Transformers\UserExtendTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserExtendPresenter
 *
 * @package namespace Someline\Presenters;
 */
class UserExtendPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserExtendTransformer();
    }
}
