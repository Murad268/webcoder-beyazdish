<?php namespace Beyazdish\Settings\Components;

use Beyazdish\Banners\Models\Banners;
use Beyazdish\Settings\Repositories\SettingsRepository;
use Cms\Classes\ComponentBase;

/**
 * Contact Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Contact extends ComponentBase
{
    protected $settings;
    protected $services;
    protected $map;
    public function init()
    {
        $this->settings = app(SettingsRepository::class);
    }
    public function onRun()
    {
        $this->page['contact_page_banner'] = Banners::first()->contact;
        $this->page['emailsC'] = $this->settings->emailsQueryOnContactForm();
        $this->page['addressesC'] = $this->settings->addressesQueryOnContactForm();
        $this->page['numbersC'] = $this->settings->numbersQueryOnContactForm();
        $this->page['map'] = $this->settings->settingsQuery()->map;
    }
    public function componentDetails()
    {
        return [
            'name' => 'Contact Component',
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
