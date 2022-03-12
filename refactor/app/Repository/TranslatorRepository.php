<?php

namespace DTApi\Repository;

use DTApi\Repository\Contracts\TranslatorRepositoryInterface;
use DTApi\Models\Translator;

class TranslatorRepository extends BaseRepository implements TranslatorRepositoryInterface
{

    public function __construct()
    {
        parent::__construct(Translator::class);
    }

}