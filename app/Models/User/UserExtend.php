<?php

namespace App\Models\User;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Jenssegers\Mongodb\Eloquent\Model as Model;

/**
 * UserExtend
 * Class UserExtend
 * @package App\Models\User
 */
class UserExtend extends Model implements Transformable
{
    use TransformableTrait;

    protected $connection = 'mongodb';
    protected $collection = 'bt_users_extend';

    public $timestamps = true;
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $guarded = [];

    protected $hidden = ['_id'];

    // Fields to be converted to Carbon object automatically
    protected $dates = [];

    protected $casts = [
        'Fart_type'   => 'integer',
        'Farticle_id' => 'string',
        'Fupdate'     => 'integer',
    ];

    public function setFartTypeAttribute($value)
    {
        $this->attributes['Fart_type'] = intval($value);
    }

    public function getFartTypeAttribute($value)
    {
        return intval($value);
    }

}
