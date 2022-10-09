<?php
namespace Inkdez\AppManager\Support\Facades;
use Illuminate\Support\Facades\Facade;

final class SingleSelectFieldFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SingleSelectField';
    }
}
