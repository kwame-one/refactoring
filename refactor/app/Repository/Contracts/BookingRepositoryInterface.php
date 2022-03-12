<?php

namespace DTApi\Repository\Contracts;

interface BookingRepositoryInterface extends CoreRepositoryInterface
{
    function getTranslatorJobs($user_id, $type);

    function checkParticularJob($user_id, $item);

    function getTranslatorJobsHistoric($user_id, $type, $pagenum);

    function assignedToPaticularTranslator($userId, $jobId);

    function getJobsAssignedTranslatorDetail($job);

    function isNeedToSendPush($userId);

    function isTranslatorAlreadyBooked($job_id, $cuserid, $jobdue);

    function insertTranslatorJobRel($cuserid, $job_id);

    function checkTowns($jobuserid, $cuserid);

    function getJobs($user_id, $job_type, $status, $userlanguage, $gender, $translator_level);
}