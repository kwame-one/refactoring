<?php

namespace DTApi\Repository;

use DTApi\Repository\Contracts\UserRepositoryInterface;
use DTApi\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function getPotentialUsers($translator_type, $joblanguage, $gender, $translator_level, $translatorsId)
    {
        return $this->model::getPotentialUsers($translator_type, $joblanguage, $gender, $translator_level, $translatorsId);
    }

    public function findByEmail($emai)
    {
        return $this->model::where('email', $emai)->first();
    }

    public function findByUserType($userType)
    {
        return $this->model::where('user_type', $userType)->get();
    }

    public function findWhereInEmail($email)
    {
        return $this->model::whereIn('email', $email)->get();
    }

}