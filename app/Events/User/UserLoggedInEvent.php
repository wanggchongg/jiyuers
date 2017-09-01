<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace App\Events\User;


use Illuminate\Queue\SerializesModels;
use App\Models\Foundation\User;

class UserLoggedInEvent
{
    use SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
