<?php namespace Beyazdish\About\Components;

use Beyazdish\Banners\Models\Banners;
use Beyazdish\Services\Repositories\ServiceRepository;
use Cms\Classes\ComponentBase;
use Beyazdish\About\Models\About as AboutModel;
/**
 * About Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class About extends ComponentBase
{
    protected $services;

    public function init()
    {
        $this->services = app(ServiceRepository::class);
    }
    public function onRun()
    {

        $this->page['about'] = AboutModel::first();
        $this->page['services'] = $this->services->servicesQuery();
        $this->page['about_page_banner'] = Banners::first()->about;

    }
    public function componentDetails()
    {
        return [
            'name' => 'about Component',
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
