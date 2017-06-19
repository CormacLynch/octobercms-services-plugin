<?php

namespace GetRight\Services\Facades;

use October\Rain\Support\Facade;

/**
 * @see \GetRight\Services\Repositories\ServiceRepository
 */
class ServiceRepository extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ServiceRepository';
    }
}
