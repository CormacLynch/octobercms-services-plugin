<?php

namespace GetRight\Services\Components;

use Cms\Classes\ComponentBase;
use GetRight\Services\Facades\ServiceRepository;
use GetRight\Services\Models\Service;

/**
 * Class ServiceBlocks
 * @package GetRight\Services\Components
 * @author getRight
 */
class Services extends ComponentBase
{
    /**
     * Holds services data.
     *
     * @var $services
     */
    public $services;

    /**
     * Define component details.
     *
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'ServiceBlocks Component',
            'description' => 'Adds service blocks to your site.'
        ];
    }

    /**
     * Method runs when component is loaded.
     */
    public function onRun()
    {
        $this->services = $this->getServices();
    }

    /**
     * Gets specified number of services.
     *
     * @return \GetRight\Services\Models\Service
     */
    private function getServices()
    {
        return ServiceRepository::take();
    }
}
