<?php

namespace XuTL\Tim;

use Illuminate\Support\Facades\Facade;

class Tim extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tim';
    }
}