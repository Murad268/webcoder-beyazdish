<?php namespace Beyazdish\Services\Components;

use Beyazdish\Banners\Models\Banners;
use Beyazdish\Services\Repositories\ServiceRepository;
use Cms\Classes\ComponentBase;

/**
 * Services Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Services extends ComponentBase
{
    protected $services;
    public function init()
    {
        $this->services = app(ServiceRepository::class);
    }
    public function onRun()
    {
        $this->page['services'] = $this->services->servicesQuery();
        $this->page['services_page_banner'] = Banners::first()->services;
    }
    public function componentDetails()
    {
        return [
            'name' => 'services Component',
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
