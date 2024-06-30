<?php namespace Beyazdish\Settings;

use Beyazdish\HomePage\Components\HomePage;
use Beyazdish\Settings\Components\Contact;
use Beyazdish\Settings\Components\Favicon;
use Beyazdish\Settings\Components\Footer;
use Beyazdish\Settings\Components\Header;
use Beyazdish\Settings\Components\Lang;
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
            Header::class => "header",
            Footer::class => "footer",
            HomePage::class => "home",
            Favicon::class => "favicon",
            Lang::class => "lang",
            Contact::class => "contact",
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
