<?php
namespace Inkdez\AppManager\Support\Facades;
use Illuminate\Support\Facades\Facade;

final class MultipleSelectFieldFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MultipleSelectField';
    }
}
