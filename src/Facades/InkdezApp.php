<?php

namespace Inkdez\AppManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool makeApp(String $companyName,String $appName)
 * @method static bool createTable(String $companyName,String $appName,?String $tableName = null)
 */

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
