<?php namespace GetRight\Services\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Services Back-end Controller
 */
class Services extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('GetRight.Services', 'services', 'services');
    }
}
