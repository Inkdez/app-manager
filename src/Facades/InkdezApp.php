<?php

namespace Inkdez\AppManager\Facades;

use Illuminate\Support\Facades\Facade;

class InkdezApp extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'InkdezApp';
    }
}
