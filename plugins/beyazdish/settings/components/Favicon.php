<?php namespace Beyazdish\Settings\Components;

use Beyazdish\Settings\Repositories\SettingsRepository;
use Cms\Classes\ComponentBase;

/**
 * Favicon Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Favicon extends ComponentBase
{
    protected $settings;
    public function init()
    {
        $this->settings = app(SettingsRepository::class);
    }
    public function onRun()
    {
        $this->page['favicon'] = $this->settings->settingsQuery()->first()->favicon->path;
    }
    public function componentDetails()
    {
        return [
            'name' => 'favicon Component',
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
