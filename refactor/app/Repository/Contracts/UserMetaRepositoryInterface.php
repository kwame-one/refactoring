<?php

namespace DTApi\Repository\Contracts;

interface UserMetaRepositoryInterface extends CoreRepositoryInterface
{
    function findByUserId($userId);
}