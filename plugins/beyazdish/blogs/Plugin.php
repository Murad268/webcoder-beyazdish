<?php namespace Beyazdish\Blogs;

use Beyazdish\Blogs\Components\Blogs;
use Beyazdish\Blogs\Components\BlogsPage;
use Beyazdish\Blogs\Components\Detail;
use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            Blogs::class => 'blogs',
            BlogsPage::class => 'blogsPage',
            Detail::class => "blog_detail"
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
