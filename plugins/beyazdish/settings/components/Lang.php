<?php namespace Beyazdish\Settings\Components;

use Cms\Classes\ComponentBase;

/**
 * Lang Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Lang extends ComponentBase
{
    public function onRun() {
        $this->page['lang'] = app()->getLocale();
    }
    public function componentDetails()
    {
        return [
            'name' => 'lang Component',
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
