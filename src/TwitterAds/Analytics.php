<?php
/**
 * Created by PhpStorm.
 * User: hborras
 * Date: 23/04/16
 * Time: 10:47
 */

namespace Hborras\TwitterAdsSDK\TwitterAds;

use Hborras\TwitterAdsSDK\TwitterAds\Analytics\Job;
use Hborras\TwitterAdsSDK\TwitterAds\Errors\BadRequest;
use Hborras\TwitterAdsSDK\TwitterAds\Fields\AnalyticsFields;

class Analytics extends Resource
{
    const ENTITY              = "";
    const RESOURCE_STATS      = 'stats/accounts/{account_id}/';
    const RESOURCE_STATS_JOBS = 'stats/jobs/accounts/{account_id}/';

    /**
     * Pulls a list of metrics for the current object instance.
     * @param $metricGroups
     * @param array $params
     * @param bool $async
     * @return $this
     * @throws BadRequest
     */
    public function stats($metricGroups, $params = [], $async = false)
    {
        return $this->all_stats([$this->getId()], $metricGroups, $params, $async);
    }


    public function all_stats($ids, $metricGroups, $params = [], $async = false)
    {
        $endTime = isset($params['end_time']) ? $params['end_time'] : new \DateTime('now');
        //$endTime->setTime($endTime->format('H'), 0, 0);
        $startTime = isset($params['start_time']) ? $params['start_time'] : new \DateTime($endTime->format('c')." - 7 days");
        //$startTime->setTime($startTime->format('H'), 0, 0);
        $granularity = isset($params['granularity']) ? $params['granularity'] : Enumerations::GRANULARITY_HOUR;
        $placement = isset($params['placement']) ? $params['placement'] : Enumerations::PLACEMENT_ALL_ON_TWITTER;
        $segmentationType = isset($params['segmentation_type']) ? $params['segmentation_type'] : null;
        $entity = $params['entity'];


        $params = [
            AnalyticsFields::METRIC_GROUPS => implode(",", $metricGroups),
            AnalyticsFields::START_TIME => $startTime,
            AnalyticsFields::END_TIME => $endTime,
            AnalyticsFields::GRANULARITY => $granularity,
            AnalyticsFields::ENTITY => $entity,
            AnalyticsFields::ENTITY_IDS => implode(",", $ids),
            AnalyticsFields::PLACEMENT => $placement,
        ];

        $resource = str_replace(static::RESOURCE_REPLACE, $this->getTwitterAds()->getAccountId(), static::RESOURCE_STATS);
        $response = $this->getTwitterAds()->get($resource, $params);

        return $response->getBody()->data;
    }

    public static function inAvailableEntities($entity)
    {
        $availableEntities = [
            AnalyticsFields::ACCOUNT,
            AnalyticsFields::FUNDING_INSTRUMENT,
            AnalyticsFields::CAMPAIGN,
            AnalyticsFields::LINE_ITEM,
            AnalyticsFields::PROMOTED_TWEET,
            AnalyticsFields::ORGANIC_TWEET,
        ];

        return in_array($entity, $availableEntities);
    }

    public function getId()
    {
        return parent::getId();
    }
}
