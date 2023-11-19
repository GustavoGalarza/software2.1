<?php 
 
 // app/Listeners/PasswordShownListener.php

namespace App\Listeners;

use App\Events\PasswordShownEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PasswordShownListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  PasswordShownEvent  $event
     * @return void
     */
    public function handle(PasswordShownEvent $event)
    {
        \Log::info('La contraseña fue mostrada.');
    }
}
