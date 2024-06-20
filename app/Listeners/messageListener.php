<?php

namespace App\Listeners;

use App\Events\pusherMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class messageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\YourEvent  $event
     * @return void
     */
    public function handle(pusherMessage $data)
    {
        broadcast(new messageListener($data->message))->toOthers();
    }
}
