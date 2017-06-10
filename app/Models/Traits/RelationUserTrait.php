<?php namespace Jiyuers\Models\Traits;

use Jiyuers\Models\Foundation\User;

trait RelationUserTrait
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

}