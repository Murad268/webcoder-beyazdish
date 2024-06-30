<?php namespace Beyazdish\Faq\Components;

use Beyazdish\Banners\Models\Banners;
use Beyazdish\Faq\Repositories\FaqRepository;
use Cms\Classes\ComponentBase;

/**
 * Faq Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Faq extends ComponentBase
{
    protected $faq;
    public function init()
    {
        $this->faq = app(FaqRepository::class);
    }
    public function onRun()
    {

        $this->page['faqs'] = $this->faq->faqQuery();
        $this->page['faq_page_banner'] = Banners::first()->faq;
    }
    public function componentDetails()
    {
        return [
            'name' => 'faq Component',
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
