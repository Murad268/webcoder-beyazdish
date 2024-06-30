<?php

namespace Beyazdish\HomePage\Components;

use Beyazdish\About\Models\About;
use Beyazdish\Banners\Models\Banners;
use Beyazdish\Blogs\Repositories\BlogRepository;
use Beyazdish\Gallery\Repositories\GalleryRepository;
use Beyazdish\Services\Repositories\ServiceRepository;
use Beyazdish\Statistics\Repositories\StatisticsRepository;
use Beyazdish\Tags\Repositories\TagsRepository;
use Beyazdish\Team\Repositories\DoctorsRepository;
use Cms\Classes\ComponentBase;

/**
 * HomePage Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class HomePage extends ComponentBase
{

    protected $services;
    protected $statistics;
    protected $doctors;
    protected $images;
    protected $tags;
    protected $blog;
    public function init()
    {
        $this->services = app(ServiceRepository::class);
        $this->statistics = app(StatisticsRepository::class);
        $this->doctors = app(DoctorsRepository::class);
        $this->images = app(GalleryRepository::class);
        $this->tags = app(TagsRepository::class);
        $this->blog = app(BlogRepository::class);
    }
    public function onRun()
    {

        $this->page['about'] = About::first();
        $this->page['services'] = $this->services->servicesQuery();
        $this->page['statistics'] = $this->statistics->statisticsQuery();
        $this->page['doctors'] = $this->doctors->doctorsQuery();
        $this->page['home_page_banner'] = Banners::first()->home;
        $this->page['images'] = $this->images->galleryQuery();
        $this->page['tags'] = $this->tags->tagsQuery();
        $this->page['blogs'] = $this->blog->blogsQuery();
    }
    public function componentDetails()
    {
        return [
            'name' => 'HomePage Component',
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
