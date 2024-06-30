<?php

namespace Beyazdish\Services\Components;

use Beyazdish\Services\Repositories\ServiceRepository;
use Cms\Classes\ComponentBase;

/**
 * Detail Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Detail extends ComponentBase
{
    protected $services;
    public function init()
    {
        $this->services = app(ServiceRepository::class);
    }
    public function onRun()
    {
        $slug = $this->param('slug');
        $service = $this->services->oneService($slug);
        $this->page['servicers'] = $this->services->servicesQuery();
        $this->page['service'] = $service;
    }
    public function componentDetails()
    {
        return [
            'name' => 'detail Component',
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
