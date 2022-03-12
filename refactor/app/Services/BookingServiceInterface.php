<?php

namespace DTApi\Services;


interface BookingServiceInterface
{

    function find($id);

    function distanceFeed(array $data);

    function getUsersJobs($user_id);

    function getUsersJobsHistory($user_id, array $request);

    function store($user, $data);

    function storeJobEmail($data);

    function jobToData($job);

    function jobEnd($post_data = array());

    function getPotentialJobIdsWithUserId($user_id);

    function sendNotificationTranslator($job, $data = [], $exclude_user_id);

    function sendSMSNotificationToTranslator($job);

    function isNeedToDelayPush($user_id);

    function isNeedToSendPush($user_id);

    function sendPushNotificationToSpecificUsers($users, $job_id, $data, $msg_text, $is_need_delay);

    function getPotentialTranslators(Job $job);

    function updateJob($id, $data, $cuser);

    function sendSessionStartRemindNotification($user, $job, $language, $due, $duration);


    function sendChangedTranslatorNotification($job, $current_translator, $new_translator);


    function sendChangedDateNotification($job, $old_time);

    function sendChangedLangNotification($job, $old_lang);

    function sendExpiredNotification($job, $user);

    function sendNotificationByAdminCancelJob($job_id);

    function acceptJob($data, $user);

    function acceptJobWithId($job_id, $cuser);

    function cancelJobAjax($data, $user);

    function getPotentialJobs($cuser);

    function endJob($post_data);

    function customerNotCall($post_data);

    function getAll(array $requestdata, $limit = null, $cuser);

    function alerts(array $requestdata, $authUser);

    function userLoginFailed();

    function bookingExpireNoAccepted(array $requestdata, $authUser);

    function ignoreExpiring($id);

    function ignoreThrottle($id);

    function reopen($request);
    
}