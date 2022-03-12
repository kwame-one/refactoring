<?php

namespace DTApi\Repository;

use DTApi\Repository\Contracts\ThrottleRepositoryInterface;
use DTApi\Models\Throttle;

class ThrottleRepository extends BaseRepository implements ThrottleRepositoryInterface
{

    public function __construct()
    {
        parent::__construct(Throttle::class);
    }

}

