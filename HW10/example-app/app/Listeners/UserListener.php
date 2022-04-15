<?php

namespace App\Listeners;

use App\Models\User;

class UserListener
{
    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        if (isset($event->user) && $event->user instanceof User) {
            $event->user->last_login = now();
            $event->user->save();
        }
    }
}
