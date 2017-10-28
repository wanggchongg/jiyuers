<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Presenter\ModelFractalPresenter;

class BaseModel extends Model
{
    /**
     * Set Model Presenter
     * @return $this
     */
    public function setModelPresenter()
    {
        $this->setPresenter(new ModelFractalPresenter());
        return $this;
    }

}
