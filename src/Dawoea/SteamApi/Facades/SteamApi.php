<?php

namespace Dawoea\SteamApi\Facades;

use Illuminate\Support\Facades\Facade;

class SteamApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'steam-api';
    }
}
