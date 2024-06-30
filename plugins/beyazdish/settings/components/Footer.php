<?php namespace Beyazdish\Settings\Components;

use Cms\Classes\ComponentBase;
use Beyazdish\Settings\Repositories\SettingsRepository;
/**
 * Footer Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Footer extends ComponentBase
{
    protected $settings;
    public function init()
    {
        $this->settings = app(SettingsRepository::class);
    }
    public function onRun()
    {
        $this->page['settings'] = $this->settings->settingsQuery();
        $this->page['addressess'] = $this->settings->addressesQuery();
        $this->page['emailsF'] = $this->settings->emailsQueryOnFooter();
        $this->page['numbersF'] = $this->settings->numbersQueryOnFooter();
        $this->page['hours'] = $this->settings->hours();
    }
    public function componentDetails()
    {
        return [
            'name' => 'Footer Component',
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
