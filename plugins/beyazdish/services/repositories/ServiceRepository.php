<?php

namespace Beyazdish\Services\Repositories;

use Beyazdish\Services\Models\Services;

class ServiceRepository
{

    public function __construct(public Services $services)
    {
    }

    public function servicesQuery() {
        return $this->services->where('status', 1)->where('service_parent_id', null)->get();
    }
    public function oneService(string $slug)
    {
        return $this->services->where('slug', $slug)->first();
    }
}
