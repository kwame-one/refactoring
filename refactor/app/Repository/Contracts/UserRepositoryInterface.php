<?php

namespace DTApi\Repository\Contracts;

interface UserRepositoryInterface extends CoreRepositoryInterface
{
    function getPotentialUsers($translator_type, $joblanguage, $gender, $translator_level, $translatorsId);

    function findByEmail($email);

    function findByUserType($userType);

    function findWhereInEmail($email);
}