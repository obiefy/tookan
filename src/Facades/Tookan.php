<?php

namespace Obiefy\Tookan\Facades;

use Illuminate\Support\Facades\Facade;

class Tookan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tookan';
    }
}
