<?php

namespace Beyazdish\Gallery\Repositories;

use Beyazdish\Gallery\Models\Gallery;

class GalleryRepository
{

    public function __construct(public Gallery $images)
    {
    }

    public function galleryQuery()
    {
        return $this->images->where('status', 1)->get();
    }
}
