<?php

namespace JunaidPK\EnvManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JunaidPK\EnvManager\EnvManager
 */
class EnvManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \JunaidPK\EnvManager\EnvManager::class;
    }
}
