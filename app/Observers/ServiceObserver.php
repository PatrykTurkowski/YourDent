<?php

namespace App\Observers;

use App\Models\Service;

class ServiceObserver
{


    /**
     * Handle the Service "restoring" event.
     *
     * @param  \App\Models\Service  $service
     * @return void
     */
    public function restoring(Service $service)
    {
        $service->categories()->restore();
    }
}