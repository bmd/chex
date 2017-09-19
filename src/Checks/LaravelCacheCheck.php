<?php
namespace Chex\Checks;

use Chex\Contracts\Checkable;
use Cache;
use Exception;

/**
 * Class LaravelRedisCheck
 * @package Chex\Checks
 */
class LaravelCacheCheck implements Checkable
{
    public function check(array $config)
    {
        try {
            app('cache')->put("health-check", "ok", 1);
            $cache = ['available' => true];
        } catch (Exception $e) {
            $this->healthy = false;
            $cache = ['available' => false];
        }
        $cache['driver'] = env('CACHE_DRIVER');
        $cache['host'] = $cache['driver'] == 'redis' ? env('REDIS_HOST') : null;
        $cache['port'] = $cache['driver'] == 'redis' ? env('REDIS_PORT') : null;

        return $cache;
    }

}