<?php

namespace App\Listeners\Post;


use App\Events\Post\PostStoreEvent;

class BlaPostStoFssreListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostStoreEvent $event): void
    {
        dump(33333333333);
    }
}
