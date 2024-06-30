<?php namespace Beyazdish\Team\Components;

use Beyazdish\Team\Repositories\DoctorsRepository;
use Cms\Classes\ComponentBase;

/**
 * Detail Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Detail extends ComponentBase
{

    protected $doctors;
    public function init()
    {
        $this->doctors = app(DoctorsRepository::class);
    }
    public function onRun()
    {
        $slug = $this->param('slug');
        $doctor = $this->doctors->oneDoctor($slug);
        $this->page['doctor'] = $doctor;
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
