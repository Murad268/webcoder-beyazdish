<?php

namespace Beyazdish\Blogs\Components;

use Beyazdish\Banners\Models\Banners;
use Beyazdish\Blogs\Repositories\BlogRepository;
use Beyazdish\Customervideos\Models\CustomerVideos;
use Cms\Classes\ComponentBase;

/**
 * BlogsPage Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class BlogsPage extends ComponentBase
{
    protected $blog;
    public function init()
    {
        $this->blog = app(BlogRepository::class);
    }
    public function onRun()
    {
        $this->page['videos'] = CustomerVideos::where('status', 1)->get();
        $this->page['blogs_page_banner'] = Banners::first()->blogs;
        $this->page['blogs'] = $this->blog->blogsQuery();
    }

    public function componentDetails()
    {
        return [
            'name' => 'blogsPage Component',
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
