<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace Jiyuers\Listeners\User;


use Jiyuers\Events\User\UserLoggedInEvent;
use Jiyuers\Events\User\UserRegisteredEvent;
use Jiyuers\Models\BaseModel;

class UserEventListener
{

    public function __construct()
    {
    }


    /**
     * Handle user login events.
     * @param UserLoggedInEvent $event
     */
    public function onUserLogin(UserLoggedInEvent $event)
    {
    }

    /**
     * Handle user registered events.
     * @param UserRegisteredEvent $event
     */
    public function onUserRegistered(UserRegisteredEvent $event)
    {
    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event)
    {
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            UserLoggedInEvent::class,
            'Jiyuers\Listeners\User\UserEventListener@onUserLogin'
        );

        $events->listen(
            UserRegisteredEvent::class,
            'Jiyuers\Listeners\User\UserEventListener@onUserRegistered'
        );

//        $events->listen(
//            'Jiyuers\Events\UserLoggedOut',
//            'Jiyuers\Listeners\UserEventListener@onUserLogout'
//        );
    }

}