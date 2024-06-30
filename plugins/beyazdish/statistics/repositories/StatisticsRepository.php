<?php

namespace Beyazdish\Statistics\Repositories;

use Beyazdish\Statistics\Models\Statistics;

class StatisticsRepository
{

    public function __construct(public Statistics $statistics)
    {
    }

    public function statisticsQuery()
    {
        return $this->statistics->all();
    }
}
