<?php

namespace DTApi\Repository;

use DTApi\Repository\Contracts\BookingRepositoryInterface;
use DTApi\Models\Job;

/**
 * Class BookingRepository
 * @package DTApi\Repository
 */
class BookingRepository extends BaseRepository implements BookingRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(Job::class);
    }

    /**
     * @param string $slug
     * @return Model
     * @throws ModelNotFoundException
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }

    public function getTranslatorJobs($user_id, $type)
    {
        return $this->model::getTranslatorJobs($user_id, $type);
    }

    public function checkParticularJob($user_id, $item) 
    {
        return $this->model::checkParticularJob($user_id, $item);
    }

    public function getTranslatorJobsHistoric($user_id, $type, $pagenum)
    {
        return $this->model::getTranslatorJobsHistoric($user_id, $type, $pagenum);
    }

    public function assignedToPaticularTranslator($userId, $jobId)
    {
        return $this->model::assignedToPaticularTranslator($userId, $jobId);
    }

    public function getJobsAssignedTranslatorDetail($job)
    {
        return $this->model::getJobsAssignedTranslatorDetail($job);
    }

    function isTranslatorAlreadyBooked($job_id, $cuserid, $jobdue)
    {
        return $this->model::isTranslatorAlreadyBooked($job_id, $cuserid, $jobdue);
    }

    public function insertTranslatorJobRel($cuserid, $job_id)
    {
        return $this->model::insertTranslatorJobRel($cuserid, $job_id);
    }

    public function checkTowns($jobuserid, $cuserid)
    {
        return $this->model::checkTowns($jobuserid, $cuserid);
    }

    public function getJobs($user_id, $job_type, $status, $userlanguage, $gender, $translator_level)
    {
        return $this->model::getJobs($user_id, $job_type, $status, $userlanguage, $gender, $translator_level);
    }
   
}