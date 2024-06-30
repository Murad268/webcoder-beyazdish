<?php namespace Beyazdish\Blogs\Components;

use Beyazdish\Banners\Models\Banners;
use Beyazdish\Blogs\Repositories\BlogRepository;
use Cms\Classes\ComponentBase;

/**
 * Detail Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Detail extends ComponentBase
{
    protected $blogs;
    public function init()
    {
        $this->blogs = app(BlogRepository::class);
    }
    public function onRun()
    {
        $slug = $this->param('slug');
        $blog = $this->blogs->oneBlog($slug);
       
        $this->page['blog_page_banner'] = Banners::first()->one_blog;
        $this->page['blog'] = $blog;
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
