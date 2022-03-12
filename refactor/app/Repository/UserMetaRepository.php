<?php

namespace DTApi\Repository;

use DTApi\Repository\Contracts\UserMetaRepositoryInterface;
use DTApi\Models\Throttle;

class UserMetaRepository extends BaseRepository implements UserMetaRepositoryInterface
{

    public function __construct()
    {
        parent::__construct(UserMeta::class);
    }

    public function findByUserId($userId)
    {
        return $this->model::where('user_id', $userId)->first();
    }

}