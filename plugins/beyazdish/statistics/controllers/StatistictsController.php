<?php namespace Beyazdish\Statistics\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class StatistictsController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Beyazdish.Statistics', 'main-menu-item');
    }

}
