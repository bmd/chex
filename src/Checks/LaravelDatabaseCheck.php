<?php
namespace Chex\Checks;

use Chex\Contracts\Checkable;
use Exception;

/**
 * Class LaravelMysqlCheck
 * @package Chex\Checks
 */
class LaravelDatabaseCheck implements Checkable
{
    public function check(array $config)
    {
        try {
            app('db')->connection()->getPdo();
            $dbStatus = true;
        } catch (Exception $e) {
            $dbStatus = false;
            $this->healthy = false;
        }

        return [
            'available' => $dbStatus,
            'name' => app('db')->connection()->getConfig('name'),
            'host' => app('db')->connection()->getConfig('host'),
            'port' => app('db')->connection()->getConfig('port') ?? 3306,
        ];
    }

}