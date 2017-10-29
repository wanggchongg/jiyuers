<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User
 * @package App\Models
 */
class User extends Model implements Transformable
{
    use TransformableTrait;
    use HybridRelations;

    protected $connection = 'mysql';

    public $timestamps = true;
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

    protected $primaryKey = 'user_id';
    public $incrementing = true;

    protected $fillable = [
        'Ftitle',
    ];
//    protected $fillable = [
//        'Farticle_id',
//        'Ftitle',
//        'Furl',
//        'Fimg_url',
//        'Fart_type',
//        'Fsource',
//        'Fmedia',
//        'Fmedia_level',
//        'Forg_id',
//        'Forg_url',
//        'Forg_site',
//        'Forg_column',
//        'Forg_time',
//        'category',
//        'category_name',
//        'sub_category',
//        'sub_category_name',
//    ];

    // Fields to be converted to Carbon object automatically
    protected $dates = [];

    public function getTable()
    {
        return "bt_users";
    }
}
