<?php

namespace DTApi\Repository;

use DTApi\Repository\Contracts\LanguageRepositoryInterface;
use DTApi\Models\Language;

class LanguageRepository extends BaseRepository implements LanguageRepositoryInterface
{

    public function __construct()
    {
        parent::__construct(Language::class);
    }

}