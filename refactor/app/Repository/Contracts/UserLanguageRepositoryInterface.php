<?php

namespace DTApi\Repository\Contracts;

interface UserLanguageRepositoryInterface extends CoreRepositoryInterface
{
    
    function findByUserId($userId);

}