<?php

namespace Beyazdish\Settings\Components;

use App;
use Beyazdish\Services\Repositories\ServiceRepository;
use Beyazdish\Settings\Repositories\SettingsRepository;
use Cms\Classes\ComponentBase;
use Lang;

/**
 * Header Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Header extends ComponentBase
{

    protected $settings;
    protected $services;
    public function init()
    {
        $this->settings = app(SettingsRepository::class);
        $this->services = app(ServiceRepository::class);
    }
    public function onRun()
    {
        $this->page['settings'] = $this->settings->settingsQuery();
        $this->page['emails'] = $this->settings->emailsQueryOnNavbar();
        $this->page['numbers'] = $this->settings->numbersQueryOnNavbar();
        $this->page['socials'] = $this->settings->socialsQuery();
        $this->page['services'] = $this->services->servicesQuery();
    }
    public function componentDetails()
    {
        return [
            'name' => 'Header Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
