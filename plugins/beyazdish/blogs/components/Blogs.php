<?php namespace Beyazdish\Blogs\Components;

use Cms\Classes\ComponentBase;

/**
 * Blogs Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Blogs extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'blogs Component',
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
