<?php

namespace GetRight\Services;

use Backend;
use System\Classes\PluginBase;
use Illuminate\Support\Facades\App;

/**
 * Services Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin Dependencies.
     */
    public $require = ['Rahman.Faker'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Services',
            'description' => 'Add services to your website.',
            'author'      => 'GetRight',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        App::register( 'GetRight\Services\Providers\ServiceRepositoryProvider');
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'GetRight\Services\Components\Services' => 'ServiceBlocks',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'getright.services.some_permission' => [
                'tab' => 'Services',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'services' => [
                'label'       => 'Services',
                'url'         => Backend::url('getright/services/services'),
                'icon'        => 'icon-leaf',
                'permissions' => ['getright.services.*'],
                'order'       => 500,
            ],
        ];
    }
}
