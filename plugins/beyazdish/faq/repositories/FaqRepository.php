<?php

namespace Beyazdish\Faq\Repositories;

use Beyazdish\Faq\Models\FAQ;

class FaqRepository
{

    public function __construct(public FAQ $faq)
    {
    }

    public function faqQuery()
    {
        return $this->faq->where('status', 1)->get();
    }
}
