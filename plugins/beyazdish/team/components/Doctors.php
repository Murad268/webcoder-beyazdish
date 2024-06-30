<?php namespace Beyazdish\Team\Components;

use Beyazdish\Banners\Models\Banners;
use Beyazdish\Team\Repositories\DoctorsRepository;
use Cms\Classes\ComponentBase;

/**
 * Doctors Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Doctors extends ComponentBase
{

    protected $doctors;

    public function init()
    {
        $this->doctors = app(DoctorsRepository::class);
    }
    public function onRun()
    {
        $this->page['doctors'] = $this->doctors->all();
        $this->page['doctors_page_banner'] = Banners::first()->team;
    }
    public function componentDetails()
    {
        return [
            'name' => 'Doctors Component',
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
