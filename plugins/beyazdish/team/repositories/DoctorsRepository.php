<?php

namespace Beyazdish\Team\Repositories;

use Beyazdish\Team\Models\Doctors;

class DoctorsRepository
{

    public function __construct(public Doctors $doctors)
    {
    }

    public function doctorsQuery()
    {
        return $this->doctors->where('status', 1)->get();
    }
    public function all()
    {
        return $this->doctors->all();
    }
    public function oneDoctor(string $slug)
    {
        return $this->doctors->where('slug', $slug)->first();
    }
}
