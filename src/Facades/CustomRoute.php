<?php

namespace rafapaulino\CustomRoute\Facades;

use Illuminate\Support\Facades\Facade;

class CustomRoute extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'customroute';
    }
}
