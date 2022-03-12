<?php

namespace DTApi\Repository;

use DTApi\Repository\Contracts\UserLanguageRepositoryInterface;
use DTApi\Models\UserLanguages;

class UserLanguageRepository extends BaseRepository implements UserLanguageRepositoryInterface
{

    public function __construct()
    {
        parent::__construct(UserLanguages::class);
    }

    public function findByUserId($userId)
    {
        return $this->model::where('user_id', $userId)->get();
    }

}