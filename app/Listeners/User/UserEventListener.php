<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace App\Listeners\User;


use App\Events\User\UserLoggedInEvent;
use App\Events\User\UserRegisteredEvent;
use App\Models\BaseModel;

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
            'App\Listeners\User\UserEventListener@onUserLogin'
        );

        $events->listen(
            UserRegisteredEvent::class,
            'App\Listeners\User\UserEventListener@onUserRegistered'
        );

//        $events->listen(
//            'App\Events\UserLoggedOut',
//            'App\Listeners\UserEventListener@onUserLogout'
//        );
    }

}