<?php

namespace App\Listeners\Post;

use App\Events\Post\PostStoreEvent;

class BlaPostStoreListener
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
        dump(11111111);
    }
}
