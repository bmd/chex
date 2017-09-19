<?php
namespace Chex\Laravel;

use Chex\Runner;

/**
 * Class HealthCheckController
 * @package Chex\Laravel
 */
class HealthCheckController
{
    protected const CHECK_GROUP_SHALLOW = 'shallow';
    protected const CHECK_GROUP_DEEP = 'deep';

    /**
     * HealthCheckController constructor.
     */
    public function __construct()
    {
    }

    public function checkShallow(Runner $runner)
    {
        $results = $runner->runChecks(self::CHECK_GROUP_SHALLOW);

        return response()->json($results, $runner->ok ? 200 : 500);
    }

    public function checkDeep(Runner $runner)
    {
        $results = $runner->runChecks(self::CHECK_GROUP_DEEP);

        return response()->json($results, $runner->ok ? 200 : 500);
    }
}