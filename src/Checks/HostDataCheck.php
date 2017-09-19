<?php
namespace Chex\Checks;

use Chex\Contracts\Checkable;
use Chex\Statuses;

/**
 * Class HostDataCheck
 * @package Chex\Checks
 */
class HostDataCheck implements Checkable
{
    public function check(array $config)
    {
        return [
            Statuses::STATUS_KEY => Statuses::STATUS_PASS,
            'container_id' => $_SERVER['HOSTNAME'] ?? null,
            'request_time' => $_SERVER['REQUEST_TIME'] ?? null,
            'app_environment' => $_SERVER['APP_ENV'] ?? null,
        ];
    }

}