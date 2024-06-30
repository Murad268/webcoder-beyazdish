<?php

namespace Beyazdish\Blogs\Repositories;

use Beyazdish\Blogs\Models\Blogs;

class BlogRepository
{

    public function __construct(public Blogs $blogs)
    {
    }

    public function blogsQuery()
    {
        return $this->blogs->where('status', 1)->get();
    }

    public function oneBlog(string $slug)
    {
        return $this->blogs->where('slug', $slug)->first();
    }
}
