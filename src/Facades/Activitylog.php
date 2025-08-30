<?php

namespace Kikechic\Activitylog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kikechic\Activitylog\Activitylog
 */
class Activitylog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kikechic\Activitylog\Activitylog::class;
    }
}
