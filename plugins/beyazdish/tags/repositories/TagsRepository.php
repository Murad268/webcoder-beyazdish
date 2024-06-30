<?php

namespace Beyazdish\Tags\Repositories;

use Beyazdish\Tags\Models\Tags;

class TagsRepository
{

    public function __construct(public Tags $tags)
    {
    }

    public function tagsQuery()
    {
        return $this->tags->all();
    }
}
